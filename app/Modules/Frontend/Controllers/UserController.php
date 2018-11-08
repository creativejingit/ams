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

		// $qry = User::where([]);

		// $data['grid'] = \Grid::render($qry,[
		// 	"id"		=> ["label"=> "ID", "width" => "60px"],
		// 	"first_name"  	=> ["label"=> "FIRST NAME"],
		// 	"last_name"  	=> ["label"=> "LAST NAME"],
		// 	"email" 	=> ["label"=> "EMAIL"],
		// 	"status"  	=> ['label' => 'STATUS'],

  //           "created_at"=> ['label' => 'Created'],
		// ],$gridUrls, ['ajax_mode' => true]);
		$data['grid'] = [
			"columns"=>[
				"name"  	=> ["label"=> "FIRST NAME"],
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
	            "name"  => "required",
	            "name"  => "required",
				"email" => "required|email|unique:users,id,".$id
				];

		if($request->has('password') && $request->get('password')) {
			$rules['password'] = "required|min:6|confirmed";
		}
		$validator = \Validator::make($request->all(), $rules);

		if($validator->fails()) {
			// echo "<pre>";
			// print_r(get_class_methods(redirect()->back()->withInput()->withErrors($validator)));
			// print_r(redirect()->back()->withInput()->withErrors($validator)->getSession());exit;
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
		return redirect('admin/user')->with('success',$user->name.' has been '.$action);
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