<?php

namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Modules\Admin\Models\Payment;
use  App\Modules\Admin\Models\Users;

class PaymentController extends Controller
{

	public function index(Request $request)
	{
		$data['menu_active'] = 'users';

		$data['grid'] = [
			"columns"=>[
				"type"  	=> ["label"=> "Type"],
				"amount" 	=> ["label"=> "AMOUNT"],
				"discount"  	=> ["label"=> "DISCOUNT"],
				"status" 	=> ["label"=> "STATUS"],
	            "created_at"=> ['label' => 'CREATED']
	        ],
	        "urls"=>[
				"editUrl" => [
					'url'=>'admin/payment/edit',
					'icon'=>'fa fa-pencil'
				],
				"deleteUrl" => [
					'url'=>'admin/payment/remove',
					'icon'=>'fa fa-trash-o'
				]
	        ]
		];
		$data['payment'] = Payment::where([]);
		//print_r($data); exit; 
		return view('Admin::payment.payment',$data);
	}

	public function add()
	{
		return $this->edit(null);
	}

	public function edit($id = null)
	{
		$payment = payment::findOrNew($id);
		$data['payment'] = $payment;
		$data['id'] = $id;
		$data['menu_active'] = 'users';
		return view('Admin::payment.edit',$data);
	}

	public function save(Request $request, $id = null)
	{
		$rules = [
	            "type"  => "required",
				"amount"  => "required",
	            "discount"  => "required",
				"status" => "required",
				];

		
		$validator = \Validator::make($request->all(), $rules,[
			"type.required"=>"Select User Type"
		]);

		if($validator->fails()) {
			return redirect()->back()->withInput()->withErrors($validator);
		}

		$data = $request->all();
		$payment = Payment::findOrNew($id);
		$payment->fill($data);
		
	

		$payment->save();
		$action = ($id) ? 'updated.' : 'created.';
		return redirect('admin/payment')->with('success',$payment->type.' has been '.$action);
	}

	public function remove($id)
	{
		if($id) {
			Payment::find($id)->delete();
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