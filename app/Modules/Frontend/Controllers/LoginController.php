<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $redirectTo = '/';

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

    }

    public function index()
    {
        return view('Frontend::login.login');
    }

    public function post(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'signin_email' => 'required|email',
            'signin_password' => 'required'
        ],[
            'signin_email.required' => 'The E-mail field is required.',
            'signin_email.email' => "The E-mail must be a valid email address.",
            'signin_password.required' => 'The Password field is required.'
        ]);
        if($validator->fails()) { 
            return redirect()->back()->withErrors($validator);
        }
        $userdata['email']      = $request->email;
        $userdata['password']   = $request->password;
        if(\Auth::attempt($userdata)) {
            return redirect()->intended('/');
       }
        
        return redirect()
                ->back()
                ->withError('You have entered an invalid credentials. Please try with correct one!');
        
    }
}
