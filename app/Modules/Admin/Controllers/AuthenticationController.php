<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

use  App\Modules\Admin\Models\Admin;


class AuthenticationController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/admin';


    public function __construct()
    {
        $this->middleware('admin.guest')->except('logout');
    }

    public function index()
    {
		
        return view("Admin::Login/login");
    }

    public function post(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator->fails()) { 
            return redirect()->back()->withErrors($validator);
        }
        $userdata['email']      = $request->email;
        $userdata['password']   = $request->password;


        
        if(\Auth::guard('admin')->attempt($userdata)) {
            return redirect()->intended('/admin');
        }
        
        return redirect()
                ->back()
                ->withError('Email or Password is incorrect try other one.');
    }

    public function logout(Request $request)
    {   
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/admin');
    }

    protected function guard()
    {
        return \Auth::guard('admin');
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
