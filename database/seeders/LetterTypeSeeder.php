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
            'submission_type' => 'letter',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Letter of Recommendation for Pasport',
            'submission_type' => 'letter',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Letter Statement for Active Students',
            'submission_type' => 'letter',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Letter Statement for Iternship Program',
            'submission_type' => 'letter',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Letter of Dispensation For Payment',
            'submission_type' => 'letter',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Outbound Exchange',
            'submission_type' => 'exchange',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'English Booster',
            'submission_type' => 'capacity_building',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'IGOV Creative Hub',
            'submission_type' => 'capacity_building',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Schilarship Hack 101',
            'submission_type' => 'capacity_building',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'IGOV Hello Research',
            'submission_type' => 'capacity_building',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Digital Entrepreneurship',
            'submission_type' => 'capacity_building',
            'created_at' => now()
        ]);
        DB::table('letter_types')->insert([
            'name' => 'Sertifikasi Kompetensi',
            'submission_type' => 'capacity_building',
            'created_at' => now()
        ]);
    }
}
