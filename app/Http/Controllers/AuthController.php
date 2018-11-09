<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;

class AuthController extends IndexController
{
    public function viewRegister() 
    {
    	return view('auth.register');
    }
}
