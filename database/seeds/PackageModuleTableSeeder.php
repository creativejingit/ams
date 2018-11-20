<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PackageModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ams_package_module')->insert([
	        [
	            'package_id'		=> '1',
	            'module_id'			=> '1',
	            'status' 			=> 0,
	            'created_by'		=> 1,
	            'updated_by'		=> 1,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	       	[
	            'package_id'		=> '1',
	            'module_id'			=> '2',
	            'status' 			=> 0,
	            'created_by'		=> 1,
	            'updated_by'		=> 1,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	    ]);
    }
}
