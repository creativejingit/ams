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
use Auth;
use Config;
use Carbon\Carbon;
use Session;
use Redirect;
use Validator;

class VendorController extends AdministratorController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu_active'] = 'vendor_creation';

        $data['grid'] = [
            "columns"=>[
                "vendor_name"       => ["label"=> "Vendor NAME"],
                "currency"          => ["label"=> "CURRENCY"],
                "credit_term"       => ["label"=> "CREDIT TERM"],
                "sales_tax_rate"    => ["label"=> "SALES TAX NO"],
                "sales_tax_no"      => ["label" => "SALES TAX NO."],
                "point_of_contact"  => ["label"=> "POINT OF CONTACT"],
                "wht_rate"          => ["label"=> "WTH RATE"],
                "address"           => ["label" => "ADDRESS"],
                "email"             => ["label" => "EMAIL"],
                "ntn"               => ["label" => "NTN"],
                "created_at"        => ["label" => "CREATED AT"]
            ],
            "urls"=>[
                "editUrl" => [
                    'url'=>'admin/vendor-creation/edit',
                    'icon'=>'edit'
                ],
                "deleteUrl" => [
                    'url'=>'admin/vendor-creation/remove',
                    'icon'=>'delete'
                ]
            ]
        ];

        $data['vendor_creation'] = Vendor::where([])->get();
    
        return view("Administrator::vendor_creation.vendor_creation", $data);
    }

    public function add()
    {
        return $this->edit(null);
    }

    public function edit($id = null)
    {   
        $vendor_creation = Vendor::findOrNew($id);
        $data['vendor_creation'] = $vendor_creation;
        $data['id'] = $id;
        $data['menu_active'] = 'users';
        return view('Administrator::vendor_creation.edit_vendor_creation',$data);
    }

    public function save(Request $request, $id = null)
    {       
        $userData   =  Auth::guard('admin')->user();
        $rules = [
                    "vendor_name"       => 'required', 
                    "currency"          => 'required',
                    "credit_term"       => 'required', 
                    "sales_tax_rate"    => 'required', 
                    "sales_tax_no"      => 'required', 
                    "point_of_contact"  => 'required', 
                    "wht_rate"          => 'required', 
                    "address"           => 'required', 
                    "email"             => 'required', 
                    "ntn"               => 'required', 
                ];

        $validator = \Validator::make($request->all(), $rules,[
            //"name.required"=>"Select User Type"
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = $request->all();
        $data['created_by'] = $userData->administrator_id;
        $data['updated_by'] = $userData->administrator_id;

        $saveVendorForm = Vendor::findOrNew($id);
        $saveVendorForm->fill($data);
        
    
        $saveVendorForm->save();
        $action = ($id) ? 'updated.' : 'created.';
        return redirect('admin/vendor-creation')->with('success',$saveVendorForm->vendor_name.' VENDOR has been '.$action);
    }

    public function remove($id=null)
    {
        //$id = $request->id ? $request->id : null;
        if($id) {
            Vendor::find($id)->delete();
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
