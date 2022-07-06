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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'sigov@umy.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('pass'),
            'level' => '1',
            'created_at' => now(),
        ]);
    }
}
