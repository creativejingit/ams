<?php

namespace App\Modules\Administrator\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Config;
use Carbon\Carbon;
use Session;
use Redirect;
use Validator;

class AdministratorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userData   = Auth::guard('super_admin')->user() ? Auth::guard('super_admin')->user()  : Auth::guard('admin')->user();

        if(isset($userData->super_administrator_id) && $userData->super_administrator_id != '') {
            $type = 'super_administrator';
            $id = $userData->super_administrator_id;
        }else{
            $type = 'administrator';
            $id = $userData->administrator_id;
        }

        $data = [
                    'type'                    => $type,
                    'remember_token'          => $userData->remember_token,
                    'super_administrator_id'  => $id,
                    'theme_setting'           => isset($userData->theme_setting) ? 
                                                 $userData->theme_setting :    
                                                   '{ "sidebar_menu_colors": "btn-sidebar-light","skins": "purple" }',
                                                   
                    'name'                    => $userData->name,
                    'profile_pic'             => $userData->profile_pic,
                ];

        Session::put('user_data', $data);
        return view("auth.dashboard");
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
