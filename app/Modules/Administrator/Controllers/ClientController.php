<?php

namespace App\Modules\Administrator\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SuperAdministrator;
use App\Models\Module;
use App\Models\Package;
use App\Models\PackageModule;
use App\Modules\Administrator\Models\Client;
use Auth;
use Config;
use Carbon\Carbon;
use Session;
use Redirect;
use Validator;

class ClientController extends AdministratorController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu_active'] = 'client_creation';

        $data['grid'] = [
            "columns"=>[
                "client_name"       => ["label"=> "CLIENT NAME"],
                "credit_term"       => ["label"=> "CREDIT TERM"],
                "point_of_contact"  => ["label"=> "POINT OF CONTACT"],
                "contact_no_of_poc" => ["label"=> "CONTACT NO. POC"],
                "address"           => ["label" => "ADDRESS"],
                "email"             => ["label" => "EMAIL"],
                "ntn"               => ["label" => "NTN"],
                "sales_tax_no"      => ["label" => "SALES TAX NO."],
                "created_at"        => ["label" => "CREATED AT"]
            ],
            "urls"=>[
                "editUrl" => [
                    'url'=>'admin/client-creation/edit',
                    'icon'=>'edit'
                ],
                "deleteUrl" => [
                    'url'=>'admin/client-creation/remove',
                    'icon'=>'delete'
                ]
            ]
        ];

        $data['company_creation'] = Client::where([])->get();
    
        return view("Administrator::client_creation.client_creation", $data);
    }

    public function add()
    {
        return $this->edit(null);
    }

    public function edit($id = null)
    {   
        $client_creation = Client::findOrNew($id);
        $data['client_creation'] = $client_creation;
        $data['id'] = $id;
        $data['menu_active'] = 'users';
        return view('Administrator::client_creation.edit_client_creation',$data);
    }

    public function save(Request $request, $id = null)
    {       
        $userData   =  Auth::guard('admin')->user();
        $rules = [
                    "client_name"               => "required",
                    "credit_term"               => "required",
                    "point_of_contact"          => "required",
                    "contact_no_of_poc"         => "required",
                    "address"                   => "required",
                    "email"                     => "required",
                    "ntn"                       => "required",
                    "sales_tax_no"              => "required",
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

        $saveClientCreationForm = Client::findOrNew($id);
        $saveClientCreationForm->fill($data);
        
    
        $saveClientCreationForm->save();
        $action = ($id) ? 'updated.' : 'created.';
        return redirect('admin/client-creation')->with('success',$saveClientCreationForm->client_name.' CLIENT has been '.$action);
    }

    public function remove($id=null)
    {
        //$id = $request->id ? $request->id : null;
        if($id) {
            Client::find($id)->delete();
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
