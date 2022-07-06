<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangeInstitution extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('exchange_institutions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('exchange_institutions')->insert([
            'destination_id' => '1',
            'institution' => 'University of Liverpool',
            'status' => 'active',
            'created_at' => now()
        ]);
        DB::table('exchange_institutions')->insert([
            'destination_id' => '1',
            'institution' => 'University of Birmingham',
            'status' => 'active',
            'created_at' => now()
        ]);
        DB::table('exchange_institutions')->insert([
            'destination_id' => '5',
            'institution' => 'University Malaya',
            'status' => 'active',
            'created_at' => now()
        ]);
        DB::table('exchange_institutions')->insert([
            'destination_id' => '5',
            'institution' => 'International Islamic University Malaysia',
            'status' => 'active',
            'created_at' => now()
        ]);
    }
}
