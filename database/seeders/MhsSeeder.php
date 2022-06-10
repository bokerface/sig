<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('v_students')->insert([
            'studentid' => '20180520023',
            'fullname' => 'Putri Indah Ruhama',
            'dob' => '2002-02-21',
            'email' => 'putri.indah@umy.ac.id',
            'status' => '1',
            'created_at' => now(),
        ]);
        DB::table('v_students')->insert([
            'studentid' => '20180520002',
            'fullname' => 'Nila Jihan Shelamita',
            'dob' => '2002-02-21',
            'email' => 'nila.jihan@umy.ac.id',
            'status' => '1',
            'created_at' => now(),
        ]);
        DB::table('v_students')->insert([
            'studentid' => '20180520012',
            'fullname' => 'Evan Hafiz Nando',
            'dob' => '2002-02-21',
            'email' => 'evan.hafidz@umy.ac.id',
            'status' => '1',
            'created_at' => now(),
        ]);
    }
}
