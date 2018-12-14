<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SuperAdministrator;
use App\Models\Module;
use App\Models\Package;
use App\Models\PackageModule;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use	Illuminate\Log\Logger;
use DB; 

class PackageController extends Controller
{
    public function index()
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
		$package_module_tmp = PackageModule::where([])->get();
		$data['module'] = Module::where('status', 1)->get();

		foreach ($package_module_tmp as $row )
			$package_module[$row->package_id][$row->module_id] = $row->status; 
		

		
		$data['package_module']  = $package_module; 




		
		//print_r($package_module); 

	
		$data['package_module']  = $package_module; 


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
		//$userData 	=  Auth::user();
		
		$userData = NULL;
		
		$userData 	= Auth::guard('super_admin')->user() ;
		if(empty($userData))
			$userData 	= Auth::guard('admin')->user();
		if(empty($userData))
			$userData 	= Auth::guard('user')->user();
		
		
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
		
		if($id==null)
		{
			$package_id = DB::table('ams_package')->max('package_id');
			$modules = Module::get(); 
			foreach($modules as $row )
			{ 
				$savePackageModule = PackageModule::findOrNew(null);
				$data['package_id'] = $package_id; 
				$data['module_id'] = $row->module_id; 
				$data['status'] = 0; 
				$data['created_by'] = (int) $userData->id;
				$savePackageModule->fill($data);
				$savePackageModule->save();
			}
		}
		$savePackage->save();
		$action = ($id) ? 'updated.' : 'created.';
		return redirect('package/')->with('success',$savePackage->name.' Package has been '.$action);
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
		if(isset($request['id'])) {
			PackageModule::whereIn('module_id', $request->id)->where('package_id', $request['package_id'])->update(['status' => 1]);
			PackageModule::whereNotIn('module_id', $request->id)->where('package_id', $request['package_id'])->update(['status' => 0]);
		}else{
				PackageModule::where('package_id', $request['package_id'])
					          ->update(['status' => 0]);
		}	

		return response()->json([
                    'message' => 'Modules has been updated.'
                ]);
	}	

	public function getSavedModules()
	{
		$moduleData = PackageModule::where('status', 1)->get();
		foreach ($moduleData as $key => $value) {
			$module[] = [
				'id' 					=> $value->module_id,
				'package_module_id' 	=> $value->package_module_id,
				'package_id' 			=> $value->package_id
			];	
		}

		return response()->json([
            'data' => $module
        ]);
	}
}
