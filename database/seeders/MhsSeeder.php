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
            'fullname' => 'Puteri Syifa Ruhama',
            'email' => 'puteri.syifa.ruhama@umy.ac.id',
            'dateofbirth' => '2000-01-21 00:00:00.000',
            'status' => '1',
            'created_at' => now(),
        ]);
    }
}