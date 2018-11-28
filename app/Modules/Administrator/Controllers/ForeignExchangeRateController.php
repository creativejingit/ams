<?php

namespace App\Modules\Administrator\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SuperAdministrator;
use App\Models\Module;
use App\Models\Package;
use App\Models\PackageModule;
use App\Modules\Administrator\Models\Client;
use App\Modules\Administrator\Models\Vendor;
use App\Modules\Administrator\Models\ForeignExchangeRate;
use Auth;
use Config;
use Carbon\Carbon;
use Session;
use Redirect;
use Validator;

class ForeignExchangeRateController extends AdministratorController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu_active'] = 'foreign_exchange_rate';

        $data['grid'] = [
            "columns"=>[
                "date"                          => ["label"=> "DATE"],
                "usd_conversion_rate"           => ["label"=> "FOREIGN EXCHANGE RATE"],
                "created_at"                    => ["label" => "CREATED AT"]
            ],
            "urls"=>[
                "editUrl" => [
                    'url'=>'admin/foreign-exchange-rate/edit',
                    'icon'=>'edit'
                ],
                "deleteUrl" => [
                    'url'=>'admin/foreign-exchange-rate/remove',
                    'icon'=>'delete'
                ]
            ]
        ];

        $data['foreign_exchange_rate'] = ForeignExchangeRate::where([])->get();
    
        return view("Administrator::foreign_exchange_rate.foreign_exchange_rate", $data);
    }

    public function add()
    {
        return $this->edit(null);
    }

    public function edit($id = null)
    {   
        $foreign_exchange_rate = ForeignExchangeRate::findOrNew($id);
        $data['foreign_exchange_rate'] = $foreign_exchange_rate;
        $data['id'] = $id;
        $data['menu_active'] = 'users';
        return view('Administrator::foreign_exchange_rate.edit_foreign_exchange_rate',$data);
    }

    public function save(Request $request, $id = null)
    {       
        $userData   =  Auth::guard('admin')->user();
        $rules = [
                    "date"                          => 'required', 
                    "usd_conversion_rate"           => 'required',
                ];

        $validator = \Validator::make($request->all(), $rules,[
            //"name.required"=>"Select User Type"
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = $request->all();
        $data['created_by'] = $userData->administrator_id;
        $data['updated_by'] = $userData->administrator_id;

        $saveForeignExchangeRateForm = ForeignExchangeRate::findOrNew($id);
        $saveForeignExchangeRateForm->fill($data);
        
    
        $saveForeignExchangeRateForm->save();
        $action = ($id) ? 'updated.' : 'created.';
        return redirect('admin/foreign-exchange-rate')->with('success',$saveForeignExchangeRateForm->vendor_name.' Foreign Exchange Rate has been '.$action);
    }

    public function remove($id=null)
    {
        //$id = $request->id ? $request->id : null;
        if($id) {
            ForeignExchangeRate::find($id)->delete();
            return response()->json([
                'status'=>true
            ]);     
        }
        return response()->json([
            'status'=>false
        ]);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
