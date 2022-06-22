<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangeDestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exchange_destinations')->insert([
            'destination' => 'England',
            'status' => '1',
            'created_at' => now()
        ]);
        DB::table('exchange_destinations')->insert([
            'destination' => 'France',
            'status' => '1',
            'created_at' => now()
        ]);
        DB::table('exchange_destinations')->insert([
            'destination' => 'Netherland',
            'status' => '1',
            'created_at' => now()
        ]);
        DB::table('exchange_destinations')->insert([
            'destination' => 'USA',
            'status' => '1',
            'created_at' => now()
        ]);
        DB::table('exchange_destinations')->insert([
            'destination' => 'Malaysia',
            'status' => '1',
            'created_at' => now()
        ]);
        DB::table('exchange_destinations')->insert([
            'destination' => 'Thailand',
            'status' => '1',
            'created_at' => now()
        ]);
        DB::table('exchange_destinations')->insert([
            'destination' => 'China',
            'status' => '1',
            'created_at' => now()
        ]);
        DB::table('exchange_destinations')->insert([
            'destination' => 'India',
            'status' => '1',
            'created_at' => now()
        ]);
       
    }
}
