<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use  App\Modules\Admin\Models\Orders;
use Illuminate\Support\Facades\Auth;


use  App\Modules\Admin\Models\Admin;

class ServiceCategoryController extends Controller {

    public function index()
    {
        $data['menu_active'] = 'service_category';

        $data['grid'] = [
            "columns"=>[
                "id"=> ["label"=> "ID"],
                "customer_name"=> ["label"=> "Customer Name"],
				"phone_number"=> ["label"=> "Phone Number"],
				"invoice_number"=> ["label"=> "Invoice Number"],
				"invoice_photo"=> ["label"=> "Invoice Photo"],
            ],
            "urls"=>[
                "viewUrl" => [
                    'url'=>'admin/service/category/view',
                    'icon'=>'fa  fa-list-alt'
                ],
                "editUrl" => [
                    'url'=>'admin/service/category/edit',
                    'icon'=>'fa fa-pencil'
                ],
                "deleteUrl" => [
                    'url'=>'admin/service/category/remove',
                    'icon'=>'fa fa-trash-o'
                ]
            ]
        ];
		$u_id = Auth::guard('admin')->user()->id;
		if(Auth::guard('admin')->user()->type=='Admin')
			$data['orders'] = Orders::where([]);
		else 
			$data['orders'] = Orders::where("u_id",'=',$u_id);
        return view('Admin::service-category.categories',$data);
    }
	public function add()
	{
		return $this->edit(null);
	}
	public function view($id = null)
	{
		$orders = Orders::findOrNew($id);
		$data['orders'] = $orders;
		$data['id'] = $id;
		$data['u_id'] = Auth::guard('admin')->user()->id;
		$data['menu_active'] = 'services';
		
		return view('Admin::service-category.view',$data);
	}

	public function edit($id = null)
	{
		$orders = Orders::findOrNew($id);
		$data['orders'] = $orders;
		$data['id'] = $id;
		$data['u_id'] = Auth::guard('admin')->user()->id;
		$data['menu_active'] = 'services';
		return view('Admin::service-category.edit',$data);
	}

	public function save(Request $request, $id = null)
	{
		$rules = [
					"customer_name"  => "required"
				];

		$validator = \Validator::make($request->all(), $rules);

		if($validator->fails()) {
			return redirect()->back()->withInput()->withErrors($validator);
		}

		$data = $request->all();
		
		
		$orders = Orders::findOrNew($id);
		$orders->fill($data);
		
		$orders->save();

		$action = ($id) ? 'updated.' : 'created.';
		return redirect('admin/service/category')->with('success',$orders->customer_name.'Order has been '.$action);
	}

	public function remove($id)
	{
		if($id) {
			Orders::find($id)->delete();
			return response()->json([
				'status'=>true
			]);		
		}
		return response()->json([
			'status'=>false
		]);		
	}
}