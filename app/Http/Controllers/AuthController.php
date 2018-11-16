<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\SuperAdministrator as SuperAdministrator;
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
				  'type' 			        => 'super_administrator',
                  'remember_token'          => $userData->remember_token,
				  'super_administrator_id' 	=> $userData->super_administrator_id
				];

		Session::put('user_data', $data);
    	return view('auth.dashboard');
    }

    // Login
    public function login(Request $request) 
    {
        $email      = $request->email;
        $password   = $request->password;

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
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
                $superUser                  = auth()->user();
                $superUser                  = SuperAdministrator::find($superUser->super_administrator_id);
                $superUser->remember_token  = str_random(30);
                $superUser->save();

                return response()->json([
                    'auth' => false,
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
            'email'         => 'required|string|email|max:255|unique:users',
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


    public function logout(){
	    Auth::logout();
	    Session::flush();
	    return Redirect::to('/login');
	}
}
