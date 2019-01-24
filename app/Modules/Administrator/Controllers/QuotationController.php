<?php

namespace App\Modules\Administrator\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Http\Controllers\Controller;
use App\Models\SuperAdministrator;
use App\Models\Module;
use App\Models\Package;
use App\Models\PackageModule;
use App\Modules\Administrator\Models\Client;
use App\Modules\Administrator\Models\Vendor;
use App\Modules\Administrator\Models\ForeignExchangeRate;
use App\Modules\Administrator\Models\Quotation;
use App\Modules\Administrator\Models\QuotationDetail;

use Auth;
use Config;
use Carbon\Carbon;
use Session;
use Redirect;
use Validator;

class QuotationController extends AdministratorController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu_active'] = 'quotation';

        $data['grid'] = [
            "columns"=>[
                "date"                          => ["label"=> "DATE"],
                "reference_no"                  => ["label"=> "REFERENCE NO"],
                "to"                            => ["label"=> "TO"],
                "client"                        => ["label"=> "CLIENT"],
                "address"                       => ["label"=> "ADDRESS"],
                "contact_no"                    => ["label"=> "CONTACT NO"],
                "dollar_rate"                   => ["label"=> "DOLLAR RATE"],
                "created_at"                    => ["label" => "CREATED AT"]
            ],
            "urls"=>[
                "editUrl" => [
                    'url'=>'admin/quotation/edit',
                    'icon'=>'edit'
                ],
                "deleteUrl" => [
                    'url'=>'admin/quotation/remove',
                    'icon'=>'delete'
                ]
            ]
        ];

        $data['quotation'] = Quotation::where([])->get();
    
        return view("Administrator::quotation.quotation", $data);
    }

    public function add()
    {
        return $this->edit(null);
    }

    public function edit($id = null)
    {   
        $quotation = Quotation::findOrNew($id);
		$data['quotation_detail'] = QuotationDetail::where(['quotation_id' => $id])->orderBy('quotation_detail_id', 'asc')->get();
        $data['quotation'] = $quotation;
        $data['id'] = $id;
        $data['menu_active'] = 'users';
        return view('Administrator::quotation.edit_quotation',$data);
    }

    public function save(Request $request, $id = null)
    {       
	
        // dd($request->all());
		
        $userData   =  Auth::guard('admin')->user();
        $rules = [
                    "date"                          => 'required', 
                    "reference_no"                  => 'required',
                    "to"                            => 'required',
                    "client"                        => 'required',
                    "address"                       => 'required',
                    "contact_no"                    => 'required',
                    "dollar_rate"                   => 'required',
                    "project"                       => 'required',
                    "description"                   => 'required',
                    "estimated_time"                => 'required',
                   "item_title"                        => 'required|array',
                    "item_description"                 => 'required|array',
                    "item_quantity"                    => 'required|array',
                    "item_total_cost"                  => 'required|array',
                    "total_net_cost"                => 'required',
                    "tax_sst"                       => 'required',
                    "gross_total"                   => 'required',
                ];

        $messages = ['item_title.*.required' => 'Items Required', 'item_description.*.required' => 'Description Required', 'item_quantity.*.required' => 'Quantity Required', 'item_total_Cost.*.required' => 'Total Cost Required'];

        $validator = \Validator::make($request->all(), $rules,$messages,[
            //"name.required"=>"Select User Type"
        ]);
        if($validator->fails()) {
         //dd($validator);
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = $request->all();
        $data['created_by'] = isset($userData->administrator_id) ? $userData->administrator_id : 'YOU DONT HAVE PERMISSION TO ACCESS';
        $data['updated_by'] = isset($userData->administrator_id) ? $userData->administrator_id : 'YOU DONT HAVE PERMISSION TO ACCESS';
        $saveQuotation = Quotation::findOrNew($id);

        $saveQuotation->fill($data);
        
        $saveQuotation->save();

        $lastQuotationId = $saveQuotation->quotation_id;
       
	  // print_r($request['quotation_detail_id']);exit;  
        for ($key = 0; $key< count($request['item_row_id']); $key++) {
			
			
            $data = [
                'quotation_id'  => $lastQuotationId,
                'title'         => isset($request['item_title'][$key]) ? $request['item_title'][$key] : NULL,
                'description'   => isset($request['item_description'][$key]) ? $request['item_description'][$key] : NULL,
                'quantity'      => isset($request['item_quantity'][$key]) ? $request['item_quantity'][$key] : NULL,
                'total_cost'      => isset($request['item_total_cost'][$key]) ? $request['item_total_cost'][$key] : NULL,
            ];
			
			if(isset($request['quotation_detail_id'][$key] ))
			{
				
				$data['quotation_detail_id'] = $request['quotation_detail_id'][$key]; 
				$saveQuotationDetail = QuotationDetail::FirstOrCreate(['quotation_detail_id' =>  $request['quotation_detail_id'][$key]]);
		
				
			}
			else 
			{
				$saveQuotationDetail = new QuotationDetail;
			}
		

            $saveQuotationDetail->fill($data);
            $saveQuotationDetail->save();
        }

        $action = ($id) ? 'updated.' : 'created.';
		
        return redirect('admin/quotation')->with('success',' Quotation has been '.$action);
    }

    public function remove($id=null)
    {
        //$id = $request->id ? $request->id : null;
        if($id) {
             Quotation::find($id)->delete();
            return response()->json([
                'status'=>true
            ]);     
        }
        return response()->json([
            'status'=>false
        ]);   
    }
	
	public function removeQuotationDetail($id=null)
    {
        if($id) {
           $quotation_detail =QuotationDetail::FirstOrCreate(['quotation_detail_id' => $id])->delete();
		   return response()->json([
                'status'=>true
            ]);     
        }
        return response()->json([
            'status'=>false
        ]);   
    }
	
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
