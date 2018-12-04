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
        $data['packages'] = Package::get();
        return view('auth.register', $data);
    }
    // dashboard view
    public function viewDashboard() 
    {	

		$userData 	= Auth::guard('super_admin')->user() ? Auth::guard('super_admin')->user()  : Auth::guard('admin')->user();

        if(isset($userData->super_administrator_id) && $userData->super_administrator_id != '') {
            $type = 'super_administrator';
            $id = $userData->super_administrator_id;
        }else{
            $type = 'administrator';
            $id = $userData->administrator_id;
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

        // dd(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]));
        if ($validator->fails()) {
            // status -1 for validation errors of laravel
            return response()->json([
                'status' => '-1',
                'errors' => $validator->errors()
            ]); 
        } else {
            if ($user_type == 1 && Auth::guard('super_admin')->attempt(['email' => $email, 'password' => $password])) {
                // Super Admin Here                
                $user                  = Auth::guard('super_admin')->user();
                $user = SuperAdministrator::find($user->super_administrator_id);
                $user->remember_token  = str_random(30);
                $user->save();

                return response()->json([
                    // 'auth' => false,
                    'status' => '1',
                    'redirect_url' => url('/dashboard'),
                    'errors' => 'Success! logged in.'
                ]); 
                
            } elseif ($user_type == 2 && Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
                // Admin Here
                $user                  = Auth::guard('admin')->user();
                $user = Administrator::find($user->administrator_id);
                $user->remember_token  = str_random(30);
                $user->save();

                return response()->json([
                    // 'auth' => false,
                    'status' => '1',
                    'redirect_url' => url('/admin/dashboard'),
                    'errors' => 'Success! logged in.'
                ]); 
                
            }else{
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
        $package                = $request->package;

        $validator =  Validator::make($request->all(), [
            'username'      => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:ams_super_administrator,email|unique:ams_user,email|unique:ams_administrator,email',
            'password'      => 'required|string|min:6|required_with:password_conf|same:password_conf',
            'password_conf' => 'required|string|min:6',
            'package'       => 'required',
        ]);

        if ($validator->fails()) {
            // status -1 for validation errors of laravel
            return response()->json([
                'status' => '-1',
                'errors' => $validator->errors()
            ]); 
        }else{
            Administrator::create([
                'privilege_id'      => 1,
                'package_id'        => $package,
                'name'              => $username,
                'company'           => 1,
                'email'             => $email,
                'password'          => \Hash::make($password),
                'theme_setting'     => '{"sidebar_menu_colors": "btn-sidebar-light","skins": "purple" }',
                'activation_password'=> \Hash::make($password),
                'activation_status' => 1,
                'remember_token'    => bin2hex(random_bytes(20)),
                'created_by'        => 1,
                'updated_by'        => 1,
                'deleted_by'        => null,
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
        $userData   = Auth::guard('super_admin')->user() ? Auth::guard('super_admin')->user()  : Auth::guard('admin')->user(); 

        if(isset($userData->super_administrator_id) && $userData->super_administrator_id != '') {
            $type = 'super_administrator';
            $id = $userData->super_administrator_id;
            $user = SuperAdministrator::find($id); 
        }else{
            $type = 'administrator';
            $id = $userData->administrator_id;
            $user = Administrator::find($id); 
        }

        $arr = array(
          'sidebar_menu_colors' => $request->sidebar_menu_colors,
          'skins' => $request->skins,
        );

        $user->theme_setting = $arr; 
        $user->save();
    }

    public function profile() 
    { 
        $userData   = Auth::guard('super_admin')->user() ? Auth::guard('super_admin')->user()  : Auth::guard('admin')->user();
        
        if(isset($userData->super_administrator_id) && $userData->super_administrator_id != '') {
            $data['id'] = $userData->super_administrator_id;
        }else{
            $data['id'] = $userData->administrator_id;
        }

        $data['super_administrator'] = $userData;

        return view('profile.profile', $data);
    }

    public function saveProfile(Request $request)
    {
        // dd($request->all());
        $userData   = Auth::guard('super_admin')->user() ? Auth::guard('super_admin')->user()  : Auth::guard('admin')->user();
        $rules = [
                    "profile_pic"               => "required|mimes:jpg,jpeg,png|dimensions:max_width=500,max_height=500",
                    "name"                      => "required",
                    "company"                   => "required",
                ];
    

        if(isset($userData->super_administrator_id) && $userData->super_administrator_id != '') {
            $id = $userData->super_administrator_id;
            $hasPassword = SuperAdministrator::findOrFail($id, array('password'));
        }else{
            $id = $userData->administrator_id;
            $hasPassword = Administrator::findOrFail($id, array('password'));
        }

        if($hasPassword->password == null){
            $rules = [
                "password"  => "required|min:6",
            ];
        }


        $validator = \Validator::make($request->all(), $rules,[
            //"name.required"=>"Select User Type"
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = $request->all();
        $file = $request->file('profile_pic');

        if(isset($userData->super_administrator_id) && $userData->super_administrator_id != '') {
            $type = 'super_administrator';
            $id = $userData->super_administrator_id;
            $data['password'] = \Hash::make($request->password);
            $saveProfile = SuperAdministrator::findOrNew($id); 
            $filename = str_random(10).'-'.$userData->super_administrator_id.'-'.$file->getClientOriginalName();
            $data['created_by'] = $userData->super_administrator_id;
            $data['updated_by'] = $userData->super_administrator_id;
        }else{
            $type = 'administrator';
            $id = $userData->administrator_id;
            $data['password'] = \Hash::make($request->password);
            $saveProfile = Administrator::findOrNew($id); 
            $filename = str_random(10).'-'.$userData->administrator_id.'-'.$file->getClientOriginalName();
            $data['created_by'] = $userData->administrator_id;
            $data['updated_by'] = $userData->administrator_id;
        }

        
        $file->move(public_path_images('/uploads/profile_pic'),$filename);

        $data['profile_pic'] = $filename;

        $saveProfile->fill($data);
    
        $saveProfile->save();
        $action = ($id) ? 'updated.' : 'created.';

        return redirect('dashboard')->with('success',$saveProfile->name.' Prfoiel has been '.$action);
    }


    public function logout()
    {
	    Auth::logout();
	    Session::flush();
	    return Redirect::to('/login');
	}
}
