<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Darren Gavriel Suntara', 
            'nim' => '2802396373',
            'email' => 'darren.suntara@binus.ac.id', 
            'password' => Hash::make('12345678'), 
            'email_verified_at' => now(),
        ]);
    }
}