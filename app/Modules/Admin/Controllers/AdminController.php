<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Modules\Admin\Models\Admin;

class AdminController extends Controller
{

    public function index()
    {
        $data['menu_active'] = 'admins';

        $data['grid'] = [
            "columns"=>[
                "name"      => ["label"=> "FIRST NAME"],
                "email"     => ["label"=> "EMAIL"],
				"type"     => ["label"=> "TYPE"],
                "created_at"=> ['label' => 'CREATED']
            ],
            "urls"=>[
                "editUrl" => [
                    'url'=>'admin/admin_user/edit',
                    'icon'=>'fa fa-pencil'
                ],
                "deleteUrl" => [
                    'url'=>'admin/admin_user/remove',
                    'icon'=>'fa fa-trash-o'
                ]
            ]
        ];
        $data['admins'] = Admin::where([]);
        return view('Admin::admins.admins',$data);
    }

    public function add()
    {
        return $this->edit(null);
    }

    public function edit($id = null)
    {
        $admin = Admin::findOrNew($id);
        $data['admin_user'] = $admin;
        $data['id'] = $id;
        $data['menu_active'] = 'admins';
        
        return view('Admin::admins.edit',$data);
    }

    public function save(Request $request, $id = null)
    {
        $rules = [
                "name"  => "required",
                "name"  => "required",
                "email" => "required|email|unique:admins,id,".$id
                ];

        if($request->has('password') && $request->get('password')) {
            $rules['password'] = "required|min:6|confirmed";
        }
        $validator = \Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = $request->all();
        $admin = Admin::findOrNew($id);
        $admin->fill($data);
        
        if($request->has('password')) {
            $admin->password = bcrypt($request->get('password'));
        }

        $admin->save();
        $action = ($id) ? 'updated.' : 'created.';
        return redirect('admin/admin_user')->with('success',$admin->name.' has been '.$action);
    }

    public function remove($id)
    {
        if($id) {
            Admin::find($id)->delete();
            return response()->json([
                'status'=>true
            ]);     
        }
        return response()->json([
            'status'=>false
        ]);     
    }
}?>
