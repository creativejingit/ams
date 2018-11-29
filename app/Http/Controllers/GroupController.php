<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SuperAdministrator;
use App\Models\Module;
use App\Models\Group;
use App\Models\Organization;
use App\Models\Package;
use App\Models\PackageModule;
use App\Models\Method;
use App\Models\Privilege;
use App\Models\Administrator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use	Illuminate\Log\Logger;
use DB;
use Log;

class GroupController extends Controller
{
    public function viewGroup()
    {
    	$data['menu_active'] = 'group';

		$data['grid'] = [
			"columns"=>[
				"name"  			=> ["label"=> "NAME"],
	            "created_at"		=> ["label" => "CREATED AT"]
	        ],
	        "urls"=>[
				"editUrl" => [
					'url'=>'group/edit',
					'icon'=>'edit'
				],
				"deleteUrl" => [
					'url'=>'group/remove',
					'icon'=>'delete'
				]
	        ]
		];

		$data['group'] = Group::where([])->get();
		$data['organization'] = Organization::where([])->get();
		$package_module_tmp = PackageModule::where([])->get();
		$data['module'] = Module::where('status', 1)->get();

		foreach ($package_module_tmp as $row )
			$package_module[$row->package_id][$row->module_id] = $row->status; 
		
		$data['package_module']  = $package_module; 
		return view('group.groups',$data);
    }

    public function add()
	{
		return $this->edit(null);
	}

	public function edit($id = null)
	{	
		$group = Group::findOrNew($id);
		$data['organization'] = Organization::where([])->get();
		$data['group'] = $group;
		$data['id'] = $id;
		$data['menu_active'] = 'users';
		return view('group.edit-groups',$data);
	}


	public function save(Request $request, $id = null)
	{	
		$userData 	=  Auth::guard('super_admin')->user();
		$rules = [
		            "name"  			=> "required",
					"organization"		=> "required|integer",
				];

		$validator = \Validator::make($request->all(), $rules,[
			//"name.required"=>"Select User Type"
		]);

		if($validator->fails()) {
			return redirect()->back()->withInput()->withErrors($validator);
		}

		$data = $request->all();
		$data['organization_id'] = $data['organization'];
		$data['created_by'] = isset($userData->super_administrator_id) ? $userData->super_administrator_id : '';
		$data['updated_by'] = isset($userData->super_administrator_id) ? $userData->super_administrator_id : '';
		$saveGroup = Group::findOrNew($id);
		$saveGroup->fill($data);
		$saveGroup->save();


		// save modules into priveleges table.
		$org 				= Organization::find($data['organization'])->get();
		$admin 				= Administrator::find($org[0]->administrator_id)->get();
		$package 			= Package::find($admin[0]->package_id)->get();
		$packageModules 	= PackageModule::find($package[0]->package_id)->pluck('module_id');

		$methods = Method::whereIn('module_id', $packageModules)->get();
		foreach ($methods as $key => $m_value) {
			$dataPR['group_id'] 	= $saveGroup->group_id;
			$dataPR['module_id'] 	= $m_value->module_id;
			$dataPR['feature_id'] 	= $m_value->method_id;
			$dataPR['status'] 		= 0;
			$dataPR['created_by'] 	= isset($userData->super_administrator_id) ? $userData->super_administrator_id : '';
			$dataPR['updated_by'] 	= isset($userData->super_administrator_id) ? $userData->super_administrator_id : '';	
			$savePrivelege = Privilege::findOrNew($id);
			$savePrivelege->fill($dataPR);
			$savePrivelege->save();

		}

		$action = ($id) ? 'updated.' : 'created.';
		return redirect('groups/view-group')->with('success',$saveGroup->name.' Group has been '.$action);
	}


	public function remove($id=null)
	{
		if($id) {
			Group::find($id)->delete();
			return response()->json([
				'status'=>true
			]);		
		}
		return response()->json([
			'status'=>false
		]);		
	}

	public function groupsModule(Request $request, $id = null)
	{
		if($request->isMethod('post'))
		{

			Privilege::whereIn('feature_id', $request->methods)->where('group_id', $request->group_id)->where('module_id', $request->modules)->update(['status' => 1]);

			Privilege::whereNotIn('feature_id', $request->methods)->where('group_id', $request->group_id)->where('module_id', $request->modules)->update(['status' => 0]);

			return response()->json([
                    'message' => 'Group modules has been updated.'
                ]);


		}else{
			$data['module'] = DB::table('ams_module')
         
            ->join('ams_package_module', 'ams_package_module.module_id', '=', 'ams_module.module_id')
            ->where('ams_package_module.Package_id','1')
            ->groupBy('ams_module.module_id')
            ->get();
          

		//	 dd($data['modules']);


			$data['method'] = DB::table('ams_method')
			
            ->whereIn('ams_method.module_id',[1,2])
            ->get();
	
		}
		



	
/*
		$data['group_modules'] = DB::table('ams_group')
            ->join('ams_organization', 'ams_group.organization_id', '=', 'ams_organization.organization_id')
            ->join('ams_administrator', 'ams_administrator.administrator_id', '=', 'ams_organization.administrator_id')
            ->join('ams_package', 'ams_package.package_id', '=', 'ams_administrator.package_id')
            ->join('ams_package_module', 'ams_package_module.package_id', '=', 'ams_package.package_id')
            ->join('ams_module', 'ams_module.module_id', '=', 'ams_package_module.package_id')
            ->join('ams_method', 'ams_module.module_id', '=', 'ams_method.module_id')
            ->join('ams_sub_module', 'ams_sub_module.sub_module_id', '=', 'ams_method.sub_module_id')
            ->select('ams_module.module_id as MODULE_ID','ams_module.name as MODULE_NAME')
            ->where('ams_package_module.Package_id','1')
            ->groupBy('ams_module.module_id')
            ->get();

			 dd($data['group_modules']);

		$data['group_sub_modules'] = DB::table('ams_group')
            ->join('ams_organization', 'ams_group.organization_id', '=', 'ams_organization.organization_id')
            ->join('ams_administrator', 'ams_administrator.administrator_id', '=', 'ams_organization.administrator_id')
            ->join('ams_package', 'ams_package.package_id', '=', 'ams_administrator.package_id')
            ->join('ams_package_module', 'ams_package_module.package_id', '=', 'ams_package.package_id')
            ->join('ams_module', 'ams_module.module_id', '=', 'ams_package_module.package_id')
            ->join('ams_method', 'ams_module.module_id', '=', 'ams_method.module_id')
            ->join('ams_sub_module', 'ams_sub_module.sub_module_id', '=', 'ams_method.sub_module_id')
            ->where('ams_package_module.Package_id','1')
            ->select('ams_method.sub_module_id as SUB_MODULE_ID','ams_module.module_id as MODULE_ID ','ams_module.name as MODULE_NAME', 'ams_method.method_id as METHOD_ID','ams_method.name as METHOD_NAME', 'ams_sub_module.name as SUB_MODULE_NAME')
            ->groupBy('ams_method.name')
            ->get();

			// dd($data['group_sub_modules']);
		*/
		return view('group.group_modules', $data);

		// $data['group'] = Group::where([])->get();
		// $data['organization'] = Organization::where([])->get();
		// $package_module_tmp = PackageModule::where([])->get();
		// $data['module'] = Module::where('status', 1)->get();
	}
}
