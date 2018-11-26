<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ams_administrator')->insert([
	        [
	            'privilege_id'		=> 1,
	            'package_id'		=> 1,
	            'name' 				=> 'Administrator',
	            'company'			=> 'Symmetry Group',
	            'email' 			=> 'administrator@ams.com',
	            'password' 			=> \Hash::make('123456'),
	            'theme_setting'		=> '{ "sidebar_menu_colors": "btn-sidebar-light","skins": "purple" }',

	            'activation_status' => 'active',
	            'remember_token' 	=> null,
	            'created_by'		=> 1,
	            'updated_by'		=> null,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	    ]);
    }
}
