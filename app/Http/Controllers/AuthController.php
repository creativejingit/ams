<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\SuperAdministrator as SuperAdministrator;
use App\Models\Administrator as Administrator;
use App\Models\User as User;
use Config;
use Carbon\Carbon;
use Session;
use Redirect;
use Validator;


class AuthController extends IndexController
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
    // login view
    public function viewLogin() 
    {
    	return view('auth.login');
    }
    // register view 
    public function viewRegister() 
    {
        return view('auth.register');
    }
    // dashboard view
    public function viewDashboard() 
    {	
        
		$userData 	=  Auth::user();
		$data = [
                    'type' 			          => 'super_administrator',
                    'remember_token'          => $userData->remember_token,
                    'super_administrator_id'  => $userData->super_administrator_id,
                    'theme_setting'           => isset($userData->theme_setting) ? 
                                                 $userData->theme_setting :    
                                                   '{"sidebar_menu_colors": "btn-sidebar-light","skins": "purple"}',
				];

		Session::put('user_data', $data);
    	return view('auth.dashboard');
    }

    // Login
    public function login(Request $request) 
    {
        $email      = $request->email;
        $password   = $request->password;
        $user_type  = $request->user_type;

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'user_type' => 'required',
        ]);

        if ($validator->fails()) {
            // status -1 for validation errors of laravel
            return response()->json([
                'status' => '-1',
                'errors' => $validator->errors()
            ]); 
        } else {
            if (Auth::attempt(array('email' => $email, 'password' => $password))) {
                // Success
                $user                  = auth()->user();
                if($user_type == \Config::get('constants.user_types.SUPER_ADMINISTRATOR')) {
                    $user = SuperAdministrator::find($user->super_administrator_id);
                }elseif($user_type == \Config::get('constants.user_types.ADMINISTRATOR')) {
                    $user = Administrator::find($user->super_administrator_id);
                }elseif($user_type == \Config::get('constants.user_types.USER')) {
                    $user = User::find($user->super_administrator_id);
                }

                $user->remember_token  = str_random(30);
                $user->save();

                return response()->json([
                    // 'auth' => false,
                    'status' => '1',
                    'redirect_url' => url('/dashboard'),
                    'errors' => 'Success! logged in.'
                ]); 

            } else{
                return response()->json([
                    'status' => '0',
                    'redirect_url' => url('/login'),
                    'errors' => 'Credentials does not match to our system.'
                ]);
            }

        }
    }

    // Registration.
    public function register(Request $request)
    {
        $username               = $request->username;
        $email                  = $request->email;
        $password               = $request->password;
        $password_conf          = $request->password_conf;

        $validator =  Validator::make($request->all(), [
            'username'      => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:ams_super_administrator,email|unique:ams_user,email|unique:ams_administrator,email',
            'password'      => 'required|string|min:6|required_with:password_conf|same:password_conf',
            'password_conf' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            // status -1 for validation errors of laravel
            return response()->json([
                'status' => '-1',
                'errors' => $validator->errors()
            ]); 
        }else{
            return ModelAmsSuperAdministrator::create([
                'name'              => $username,
                'email'             => $email,
                'password'          => \Hash::make($password),
                'remember_token'    => bin2hex(random_bytes(20)),
                'is_superAdmin'     => 0,
                'is_admin'          => 0,
                'is_user'           => 1,
                'is_active'         => 1,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
                'deleted_at'        => null,
            ]);

            return response()->json([
                'status' => '1',
                'redirect_url' => url('/login'),
                'message' => 'Success! You are registered with the system.'
            ]);
        }
    }

    public function saveUserTheme(Request $request)
    {
        $userData   =  Auth::user();
        $userId = $userData->super_administrator_id;

        $superAdmin = SuperAdministrator::find($userId);    

        $arr = array(
          'sidebar_menu_colors' => $request->sidebar_menu_colors,
          'skins' => $request->skins,
        );

        $superAdmin->theme_setting = $arr; 
        $superAdmin->save();
    }


    public function logout(){
	    Auth::logout();
	    Session::flush();
	    return Redirect::to('/login');
	}
}
