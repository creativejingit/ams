<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SubModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ams_sub_module')->insert([
	        [
	        	'module_id' 		=> '1',
	            'name' 				=> 'Company Creation Form',
	            'description'		=> 'Company Creation Form',
	            'created_by'		=> 1,
	            'updated_by'		=> null,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	        [
	        	'module_id' 		=> '1',
	            'name' 				=> 'Client Creation form',
	            'description'		=> 'Client Creation form',
	            'created_by'		=> 1,
	            'updated_by'		=> null,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	        [
	        	'module_id' 		=> '2',
	            'name' 				=> 'Accrued Revenue Account',
	            'description'		=> 'Accrued Revenue Account',
	            'created_by'		=> 1,
	            'updated_by'		=> null,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	        [
	        	'module_id' 		=> '2',
	            'name' 				=> 'Sales Tax Output Account',
	            'description'		=> 'Sales Tax Output Account',
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
