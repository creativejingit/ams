<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SuperAdministrator;
use App\Models\Module;
use App\Models\Package;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function viewPackage()
    {
    	$data['menu_active'] = 'package';

		$data['grid'] = [
			"columns"=>[
				"name"  			=> ["label"=> "NAME"],
				"price" 			=> ["label"=> "PRICE"],
				"package_type"  	=> ["label"=> "PACKAGE TYPE"],
				"organization_no" 	=> ["label"=> "ORGANIZATION NO"],
	            "users_no"			=> ["label" => "USER NO"],
	            "module_selection"  => ["label" => "Modules"],
	            "created_at"		=> ["label" => "CREATED AT"]
	        ],
	        "urls"=>[
				"editUrl" => [
					'url'=>'package/edit',
					'icon'=>'edit'
				],
				"deleteUrl" => [
					'url'=>'package/remove',
					'icon'=>'delete'
				]
	        ]
		];

		$data['package'] = Package::where([])->get();
		return view('package.packages',$data);
    }

    public function add()
	{
		return $this->edit(null);
	}

	public function edit($id = null)
	{	
		$package = Package::findOrNew($id);
		$data['package'] = $package;
		$data['id'] = $id;
		$data['menu_active'] = 'users';
		return view('package.edit-packages',$data);
	}


	public function save(Request $request, $id = null)
	{	
		$userData 	=  Auth::user();
		$rules = [
		            "name"  			=> "required",
					"price"  			=> "required|integer|min:0",
					"package_type"  	=> "required",
					"organization_no"  	=> "required|integer|min:0",
					"users_no"  		=> "required|integer|min:0",
				];

		$validator = \Validator::make($request->all(), $rules,[
			//"name.required"=>"Select User Type"
		]);

		if($validator->fails()) {
			return redirect()->back()->withInput()->withErrors($validator);
		}

		$data = $request->all();
		$data['created_by'] = $userData->id;
		$data['updated_by'] = $userData->id;
		$savePackage = Package::findOrNew($id);
		$savePackage->fill($data);
		
	
		$savePackage->save();
		$action = ($id) ? 'updated.' : 'created.';
		return redirect('package/view-package')->with('success',$savePackage->name.' Package has been '.$action);
	}


	public function getModules()
	{
		$moduleData = Module::all();
		foreach ($moduleData as $key => $value) {
			$module[] = [
				'id' 	=> $value->module_id,
				'name' => $value->name
			];	
		}

		return response()->json([
                    'data' => $module
                ]);
	}


	public function savePackageModules(Request $request)
	{
		dd($request->all());
		

	}
}
