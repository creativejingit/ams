<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuperAdministratorTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(SubModuleTableSeeder::class);
        $this->call(MethodTableSeeder::class);
        $this->call(PackageModuleTableSeeder::class);
    }
}
