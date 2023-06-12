<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
            'username' => 'timothy',
            'email' => 'timothy@gmail.com',
            'password' => Hash::make('tim123'),
            'profilepic' => 'noprofil.jpg'
        ]);

        DB::table('users')->insert([
            'username' => 'darren',
            'email' => 'darren@gmail.com',
            'password' => Hash::make('darr123'),
            'profilepic' => 'noprofil.jpg'
        ]);
    }
}
