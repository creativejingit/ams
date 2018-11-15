<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SuperAdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ams_super_administrator')->insert([
	        [
	            'name' 				=> 'Super Admin',
	            'company'			=> 'Symmetry Group',
	            'email' 			=> 'super.admin@ams.com',
	            'password' 			=> \Hash::make('123456'),
	            'remember_token' 	=> null,
	            'created_by'		=> 0,
	            'updated_by'		=> null,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	    ]);
    }
}
