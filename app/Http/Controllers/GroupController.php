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
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use	Illuminate\Log\Logger;

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
		$userData 	=  Auth::user();
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
}
