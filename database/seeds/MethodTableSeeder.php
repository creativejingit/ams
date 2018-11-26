<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ams_method')->insert([
	        [
	        	'module_id' 		=> '1',
	        	'sub_module_id'		=> '1',
	            'name' 				=> 'Create',
	            'url' 				=> '/create',
	            'created_by'		=> 1,
	            'updated_by'		=> null,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	        [
	        	'module_id' 		=> '1',
	        	'sub_module_id'		=> '1',
	            'name' 				=> 'Update',
	            'url' 				=> '/update',
	            'created_by'		=> 1,
	            'updated_by'		=> null,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	        [
	        	'module_id' 		=> '2',
	        	'sub_module_id'		=> '2',
	            'name' 				=> 'Create',
	            'url' 				=> '/create',
	            'created_by'		=> 1,
	            'updated_by'		=> null,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	        [
	        	'module_id' 		=> '2',
	        	'sub_module_id'		=> '2',
	            'name' 				=> 'Delete',
	            'url' 				=> '/delete',
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
