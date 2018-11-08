<?php

namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Modules\Admin\Models\User;

class UserController extends Controller
{

	public function index(Request $request)
	{
		$data['menu_active'] = 'users';

		$data['grid'] = [
			"columns"=>[
				"first_name"  	=> ["label"=> "FIRST NAME"],
				"last_name"  	=> ["label"=> "LAST NAME"],
				"email" 	=> ["label"=> "EMAIL"],
	            "created_at"=> ['label' => 'CREATED']
	        ],
	        "urls"=>[
				"editUrl" => [
					'url'=>'admin/user/edit',
					'icon'=>'fa fa-pencil'
				],
				"deleteUrl" => [
					'url'=>'admin/user/remove',
					'icon'=>'fa fa-trash-o'
				]
	        ]
		];
		$data['users'] = User::where([]);
		//print_r($data); exit; 
		return view('Admin::users.users',$data);
	}

	public function add()
	{
		return $this->edit(null);
	}

	public function edit($id = null)
	{
		$user = User::findOrNew($id);
		$data['user'] = $user;
		$data['id'] = $id;
		$data['menu_active'] = 'users';
		return view('Admin::users.edit',$data);
	}

	public function save(Request $request, $id = null)
	{
		$rules = [
	            "role"  => "required",
	            "first_name"  => "required",
	            "last_name"  => "required",
				"email" => "required|email|unique:users,id,".$id,
	            "gender"  => "required",
	            "phone"  => "required",
				];

		if(($request->has('password') && $request->get('password')) || !$id) {
			$rules['password'] = "required|min:6|confirmed";
		}
		$validator = \Validator::make($request->all(), $rules,[
			"role.required"=>"Select User Type"
		]);

		if($validator->fails()) {
			return redirect()->back()->withInput()->withErrors($validator);
		}

		$data = $request->all();
		$user = User::findOrNew($id);
		$user->fill($data);
		
		if($request->has('password')) {
			$user->password = bcrypt($request->get('password'));
		}

		$user->save();
		$action = ($id) ? 'updated.' : 'created.';
		return redirect('admin/user')->with('success',$user->first_name.' has been '.$action);
	}

	public function remove($id)
	{
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

}

?>