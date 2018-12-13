<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\SuperAdministrator as SuperAdministrator;
use App\Models\Administrator as Administrator;
use App\Models\Package as Package;
use App\Models\User as User;
use Config;
use Carbon\Carbon;
use Session;
use Redirect;
use Validator;


class DashboardController extends IndexController
{

	use AuthenticatesUsers;

	/**
     * Where to redirect users after login.
     *
     * @var string
    */
    // protected $redirectTo = '/log-in';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

	
    public function index($type = null) 
    {	
	
		if($type==null)
		{
			 return redirect('/')->with('error','User type not found');
		}
		else		
		{
			
			$userData = NULL;
			if($type=='super_administrator')
				$userData 	= Auth::guard('super_admin')->user() ;
			if($type=='admin')
				$userData 	= Auth::guard('admin')->user();
			if($type=='user')
				$userData 	= Auth::guard('user')->user();
			
			if(isset($userData->super_administrator_id) && $userData->super_administrator_id != '') {
				$type = 'super_administrator';
				$id = $userData->super_administrator_id;
			}
			
			if(isset($userData->administrator_id) && $userData->administrator_id != '') {
				$type = 'administrator';
				$id = $userData->administrator_id;
			}
			
			if(isset($userData->user_id) && $userData->user_id != '') {
				$type = 'user';
				$id = $userData->user_id;
			}
			
			$data = [
						'type' 			          => $type,
						'remember_token'          => $userData->remember_token,
						'super_administrator_id'  => $id,
						'theme_setting'           => isset($userData->theme_setting) ? 
													 $userData->theme_setting :    
													   '{ "sidebar_menu_colors": "btn-sidebar-light","skins": "purple" }',
						'name'                    => $userData->name,
						'profile_pic'             => $userData->profile_pic,
					];

			if($type=='administrator')
			{
				$tmp =  Administrator::find($userData->administrator_id)->get(); 
				$data['package_id'] = $tmp[0]['package_id']; 
			}
			
			if($type=='user'){
				$tmp=  User::find($userData->user_id)->get(); 
				$data['group_id'] = $tmp[0]['group_id']; 
			}

			Session::put('user_data', $data);
			return view('dashboard.dashboard');
		}
	}
}
