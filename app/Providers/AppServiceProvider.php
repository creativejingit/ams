<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
/*
        $menus['users'] = [
            'label' => 'Users',
            'icon'  => 'fa fa-users',
            'menus' =>  [
                            'users'  =>  [
                            	'label'=>'Users',
                            	'url'=>url('admin/user'),
                            	'icon'  => 'fa fa-user'
                            ],
                            'admin_users'  =>  [
                            	'label'=>'Admin Users',
                            	'url'=>url('admin/admin_user'),
                            	'icon'  => 'fa fa-user'
                            ]
                        ]
        ];

        $menus['services'] = [
            'label' => 'Services',
            'icon'  => 'fa fa-list-alt',
            'menus' =>  [
                            // 'admin_users'  =>  ['label'=>'Admin Users','url'=>url('admin/admin_user')]
                            'categories'  =>  [
                            	'label'=>'Categories',
                            	'url'=>url('admin/service/category'),
                            	'icon'  => 'fa fa-list-alt'
                            ]
                        ]
        ];
        
        $menus['payment'] = [
            'label' =>  'Payment',
            'icon'  =>  'fa fa-list-alt',
            'url'   =>  url('admin/payment')
        ];  

        $menus['setting'] = [
            'label' =>  'Settings',
            'icon'  =>  'fa fa-cog',
            'url'   =>  url('admin/settings')
        ];                
		
        $menus['users'] = [
            'label' => 'Users',
            'icon'  => 'fa fa-users',
            'menus' =>  [
                            'users'  =>  [
                            	'label'=>'Users',
                            	'url'=>url('admin/user'),
                            	'icon'  => 'fa fa-user'
                            ],
                            'admin_users'  =>  [
                            	'label'=>'Admin Users',
                            	'url'=>url('admin/admin_user'),
                            	'icon'  => 'fa fa-user'
                            ]
                        ]
        ];
*/


        $menus['users'] = [
                            	'label'=>'Users',
                            	'url'=>url('admin/admin_user'),
                            	'icon'  => 'fa fa-user'
                           
                        
        ];
        $menus['categories'] = [
            'label' => 'Orders',
            'icon'  => 'fa fa-list-alt',
            'url'=>url('admin/service/category'),
          
        ];
    

        $menus['setting'] = [
            'label' =>  'Settings',
            'icon'  =>  'fa fa-cog',
            'url'   =>  url('admin/settings')
        ];   

        view()->share('menus',$menus);    
        
        view()->composer('*', function($view) {
            $view->with('admin', \Auth()->guard('admin')->user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
