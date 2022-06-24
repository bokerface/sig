<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')
            ->insert([
                'key' => 'curriculum_vitae',
                'label' => 'curriculum vitae',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'exchange_type',
                'label' => 'exchange type',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'motivation_letter',
                'label' => 'motivation letter',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'passport',
                'label' => 'passport',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'certificate',
                'label' => 'certificate',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'photo',
                'label' => 'photo',
                'type' => 'image'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'thesis',
                'label' => 'thesis',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'proof',
                'label' => 'proof',
                'type' => 'file'
            ]);
    }
}
