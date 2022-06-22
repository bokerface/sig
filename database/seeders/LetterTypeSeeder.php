<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('letter_types')->insert([
            'name' => 'Letter of Recommendation for Exchange (IRO)',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Letter of Recommendation for Pasport',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Letter Statement for Active Students',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Letter Statement for Iternship Program',
            'created_at' => now()
        ]);
    }
}
