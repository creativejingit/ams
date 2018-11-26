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

class OrganizationController extends Controller
{
    public function viewOrganization()
    {
    	$data['menu_active'] = 'organization';

		$data['grid'] = [
			"columns"=>[
				"name"  			=> ["label"=> "NAME"],
	            "created_at"		=> ["label" => "CREATED AT"]
	        ],
	        "urls"=>[
				"editUrl" => [
					'url'=>'organization/edit',
					'icon'=>'edit'
				],
				"deleteUrl" => [
					'url'=>'organization/remove',
					'icon'=>'delete'
				]
	        ]
		];

		$data['package'] = Package::where([])->get();
		$data['organization'] = Organization::where([])->get();
		$package_module_tmp = PackageModule::where([])->get();
		$data['module'] = Module::where('status', 1)->get();

		foreach ($package_module_tmp as $row )
			$package_module[$row->package_id][$row->module_id] = $row->status; 
		
		$data['package_module']  = $package_module; 
		return view('organization.organization',$data);
    }

    public function add()
	{
		return $this->edit(null);
	}

	public function edit($id = null)
	{	
		$organization = Organization::findOrNew($id);
		$data['organization'] = $organization;
		$data['id'] = $id;
		$data['menu_active'] = 'users';
		return view('organization.edit-organization',$data);
	}


	public function save(Request $request, $id = null)
	{	
		$userData 	=  Auth::user();
		$rules = [
		            "name"  			=> "required",
				];

		$validator = \Validator::make($request->all(), $rules,[
			//"name.required"=>"Select User Type"
		]);

		if($validator->fails()) {
			return redirect()->back()->withInput()->withErrors($validator);
		}

		$data = $request->all();
		$data['administrator_id'] = isset($userData->administrator_id) ? $userData->administrator_id : 1;
		$data['created_by'] = isset($userData->super_administrator_id) ? $userData->super_administrator_id : '';
		$data['updated_by'] = isset($userData->super_administrator_id) ? $userData->super_administrator_id : '';
		$savePackage = Organization::findOrNew($id);
		$savePackage->fill($data);
		
	
		$savePackage->save();
		$action = ($id) ? 'updated.' : 'created.';
		return redirect('organization/view-organization')->with('success',$savePackage->name.' Organization has been '.$action);
	}
	
	public function remove($id=null)
	{
		if($id) {
			Organization::find($id)->delete();
			return response()->json([
				'status'=>true
			]);		
		}
		return response()->json([
			'status'=>false
		]);		
	}
}
