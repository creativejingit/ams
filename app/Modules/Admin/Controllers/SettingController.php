<?php

namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Admin\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $data['menu_active']    = 'setting';
        $data['heading']        = 'Manage Setting';
        return view('Admin::setting.form', $data);
        
    }
    
    public function save( $movieId = null )
    {
        foreach(\Request::get('settings') as $name => $value ) {
            Setting::updateOption($name, $value);
        }
        
        return redirect()->back()->with('success', 'Setting has been saved successfully!');
    }

}