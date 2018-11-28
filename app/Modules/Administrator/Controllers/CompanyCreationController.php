<?php

namespace App\Modules\Administrator\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SuperAdministrator;
use App\Models\Module;
use App\Models\Package;
use App\Models\PackageModule;
use App\Modules\Administrator\Models\CompanyCreationForm;
use Auth;
use Config;
use Carbon\Carbon;
use Session;
use Redirect;
use Validator;

class CompanyCreationController extends AdministratorController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu_active'] = 'company_creation';

        $data['grid'] = [
            "columns"=>[
                "company_name"      => ["label"=> "COMPANY NAME"],
                "date_of_formation" => ["label"=> "DATE OF FORMATION"],
                "nature_of_business"=> ["label"=> "NATURE OF BUSINESS"],
                "ntn"               => ["label"=> "NTN"],
                "sstn"              => ["label" => "SSTN"],
                "point_of_contact"  => ["label" => "POINT OF CONTACT"],
                "address"           => ["label" => "ADDRESS"],
                "email"             => ["label" => "EMAIL"],
                "website"           => ["label" => "WEBSITE"],
                "phone_no"          => ["label" => "PHONE NO."],
                "created_at"        => ["label" => "CREATED AT"]
            ],
            "urls"=>[
                "editUrl" => [
                    'url'=>'admin/company-creation/edit',
                    'icon'=>'edit'
                ],
                "deleteUrl" => [
                    'url'=>'admin/company-creation/remove',
                    'icon'=>'delete'
                ]
            ]
        ];

        $data['company_creation'] = CompanyCreationForm::where([])->get();
    
        return view("Administrator::company_creation.company_creation", $data);
    }

    public function add()
    {
        return $this->edit(null);
    }

    public function edit($id = null)
    {   
        $company_creation = CompanyCreationForm::findOrNew($id);
        $data['company_creation'] = $company_creation;
        $data['id'] = $id;
        $data['menu_active'] = 'users';
        return view('Administrator::company_creation.edit_company_creation',$data);
    }

    public function save(Request $request, $id = null)
    {         
        $userData   =  Auth::guard('admin')->user();
        $rules = [
                    'logo'                      => 'required|mimes:jpg,jpeg,png',
                    "company_name"              => "required",
                    "date_of_formation"         => "required",
                    "nature_of_business"        => "required",
                    "ntn"                       => "required",
                    "sstn"                      => "required",
                    "point_of_contact"          => "required",
                    "address"                   => "required",
                    "email"                     => "required",
                    "website"                   => "required",
                    "phone_no"                  => "required",
                ];

        $validator = \Validator::make($request->all(), $rules,[
            //"name.required"=>"Select User Type"
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = $request->all();
        $file = $request->file('logo');

        $filename = str_random(10).'-'.$userData->administrator_id.'-'.$file->getClientOriginalName();
        $file->move(public_path_images('/uploads'),$filename);

        $data['created_by'] = $userData->administrator_id;
        $data['updated_by'] = $userData->administrator_id;
        $data['logo']       = $filename;

        $saveCompanyCreationForm = CompanyCreationForm::findOrNew($id);
        $saveCompanyCreationForm->fill($data);
        
    
        $saveCompanyCreationForm->save();
        $action = ($id) ? 'updated.' : 'created.';
        return redirect('admin/company-creation')->with('success',$saveCompanyCreationForm->company_name.' Company has been '.$action);
    }

    public function remove($id=null)
    {
        //$id = $request->id ? $request->id : null;
        if($id) {
            CompanyCreationForm::find($id)->delete();
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
