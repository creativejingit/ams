<?php

namespace App\Modules\Administrator\Controllers;

use Illuminate\Http\Request;
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
                    "Item"                          => 'required',
                    "Description"                   => 'required',
                    "Quantity"                      => 'required',
                    "total_net_cost"                => 'required',
                    "tax_sst"                       => 'required',
                    "gross_total"                   => 'required',
                ];

        $validator = \Validator::make($request->all(), $rules,[
            //"name.required"=>"Select User Type"
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = $request->all();
        $data['created_by'] = isset($userData->administrator_id) ? $userData->administrator_id : 'YOU DONT HAVE PERMISSION TO ACCESS';
        $data['updated_by'] = isset($userData->administrator_id) ? $userData->administrator_id : 'YOU DONT HAVE PERMISSION TO ACCESS';
        $saveQuotation = Quotation::findOrNew($id);

        $saveQuotation->fill($data);
        
        $saveQuotation->save();

        $lastQuotationId = $saveQuotation->quotation_id;
        
        foreach ($request['Item'] as $key => $value) {
            $data = [
                'quotation_id'  => $lastQuotationId,
                'items'         => $request['Item'][$key],
                'description'   => $request['Description'][$key],
                'quantity'      => $request['Quantity'][$key],
            // 'total_cost'      => $request['Total_Cost'][$key],
            ];

            $saveQuotationDetail = QuotationDetail::findOrNew($lastQuotationId);
            $saveQuotationDetail->fill($data);
            $saveQuotationDetail->save();
        }
        $action = ($id) ? 'updated.' : 'created.';
        return redirect('admin/quotation')->with('success',' Qoutation has been '.$action);
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
