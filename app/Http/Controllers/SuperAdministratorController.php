<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\SuperAdministrator;

class SuperAdministratorController extends Controller
{
	public function index(Request $request)
	{
		$data['menu_active'] = 'users';

		$data['grid'] = [
			"columns"=>[
				"name"  	=> ["label"=> "NAME"],
				"company" 	=> ["label"=> "COMPANY"],
				"email"  	=> ["label"=> "EMAIL"],
				"activation_status" 	=> ["label"=> "ACCOUNT STATUS"],
	            "created_at"=> ['label' => 'CREATED AT']
	        ],
	        "urls"=>[
				"editUrl" => [
					'url'=>'super-administrator/edit',
					'icon'=>'edit'
				],
				"deleteUrl" => [
					'url'=>'super-administrator/remove',
					'icon'=>'delete'
				]
	        ]
		];
		$data['super_administrator'] = SuperAdministrator::where([])->get();
		//print_r($data); exit; 
		return view('super_administrator.super_administrator',$data);
	}

	public function add()
	{
		return $this->edit(null);
	}

	public function edit($id = null)
	{
		$super_administrator = SuperAdministrator::findOrNew($id);
		$data['super_administrator'] = $super_administrator;
		$data['id'] = $id;
		$data['menu_active'] = 'users';
		return view('super_administrator.edit',$data);
	}

	public function save(Request $request, $id = null)
	{
		$rules = [
	            "name"  => "required",
				"company"  => "required",
				// "email"  => "required",
				];

		$validator = \Validator::make($request->all(), $rules,[
			//"name.required"=>"Select User Type"
		]);

		if($validator->fails()) {
			return redirect()->back()->withInput()->withErrors($validator);
		}

		$data = $request->all();
		$super_administrator = SuperAdministrator::findOrNew($id);
		$super_administrator->fill($data);
		
	
		$super_administrator->save();
		$action = ($id) ? 'updated.' : 'created.';
		return redirect('super-administrator/')->with('success',$super_administrator->name.' Super Administrator has been '.$action);
	}

	public function remove($id=null)
	{
		//$id = $request->id ? $request->id : null;
		if($id) {
			SuperAdministrator::find($id)->delete();
			return response()->json([
				'status'=>true
			]);		
		}
		return response()->json([
			'status'=>false
		]);		
	}

}

?>