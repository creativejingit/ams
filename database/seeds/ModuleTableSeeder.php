<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ams_module')->insert([
	        [
	            'name' 				=> 'Setup forms module',
	            'description'		=> 'Setup forms module',
	            'price' 			=> '100',
	            'created_by'		=> 1,
	            'updated_by'		=> null,
	            'deleted_by'		=> null,
	            'created_at'		=> Carbon::now(),
	            'updated_at'		=> Carbon::now(),
	            'deleted_at'		=> null,
	        ],
	        [
	            'name' 				=> 'General Ledger module',
	            'description'		=> 'General Ledger module',
	            'price' 			=> '150',
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
