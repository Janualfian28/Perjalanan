<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'nik' => '111222333445',
            'name' => 'admin',
            'role' => 'admin',
            'email'=> 'admin@admim.com',
        	'username' => 'admin',
            'password' => Hash::make('admin!123'),
            'remember_token' => Str::random(32)
        ]);
    }
}
