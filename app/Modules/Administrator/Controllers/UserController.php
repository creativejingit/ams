<?php

namespace App\Modules\Administrator\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SuperAdministrator;
use App\Models\Module;
use App\Models\Package;
use App\Models\PackageModule;
use App\Modules\Administrator\Models\User;
use App\Models\Organization;
use App\Models\Group;
use Auth;
use Config;
use Carbon\Carbon;
use Session;
use Redirect;
use Validator;

class UserController extends AdministratorController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu_active'] = 'user';

        $data['grid'] = [
            "columns"=> [
                "name"              => ["label"=> "NAME"],
                "email"             => ["label"=> "EMAIL"],
                "created_at"        => ["label" => "CREATED AT"]
            ],
            "urls"=>[
                "editUrl" => [
                    'url'=>'admin/user/edit',
                    'icon'=>'edit'
                ],
                "deleteUrl" => [
                    'url'=>'admin/user/remove',
                    'icon'=>'delete'
                ]
            ]
        ];

        $data['user'] = User::where([])->get();
    
        return view("Administrator::user.user", $data);
    }

    public function add()
    {
        return $this->edit(null);
    }

    public function edit($id = null)
    {   
        $userData   =  Auth::guard('admin')->user();
        $data['organization_all'] = Organization::where('administrator_id', $userData->administrator_id)->get();
        $organization = Organization::where('administrator_id', $userData->administrator_id)->pluck('organization_id');
        // $groups = Group::where('organization_id', $organization->organization_id)->get();
        $data['groups'] = Group::whereIn('organization_id', $organization)->get();

        $user = User::findOrNew($id);
        $data['user'] = $user;
        $data['id'] = $id;
        $data['menu_active'] = 'users';
        return view('Administrator::user.edit_user',$data);
    }

    public function save(Request $request, $id = null)
    {       
        $userData   =  Auth::guard('admin')->user();
        $rules = [
                    "organization_id"           => "required",
                    "group_id"                  => "required",
                    "name"                      => "required",
                    "email"                     => "required",
                    "password"                  => "required",
                ];

        $validator = \Validator::make($request->all(), $rules,[
            //"name.required"=>"Select User Type"
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = $request->all();

        $data['password'] = \Hash::make($request->password);
        $data['parent_id'] = $userData->administrator_id;
        $data['theme_setting'] = '{"sidebar_menu_colors": "btn-sidebar-light","skins": "purple" }';
        $data['activation_password'] = \Hash::make($request->password);
        $data['activation_status'] = 'active';
        $data['remember_token'] = null;
        $data['created_by'] = $userData->administrator_id;
        $data['updated_by'] = $userData->administrator_id;

        $saveClientCreationForm = User::findOrNew($id);
        $saveClientCreationForm->fill($data);
        
    
        $saveClientCreationForm->save();
        $action = ($id) ? 'updated.' : 'created.';
        return redirect('admin/user')->with('success',$saveClientCreationForm->client_name.' USER has been '.$action);
    }

    public function remove($id=null)
    {
        //$id = $request->id ? $request->id : null;
        if($id) {
            User::find($id)->delete();
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
