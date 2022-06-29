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
                'label' => 'Curriculum Vitae',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'exchange_type',
                'label' => 'Exchange Type',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'motivation_letter',
                'label' => 'Motivation Letter',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'passport',
                'label' => 'Scanned Copy of Passport',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'certificate',
                'label' => 'Scanned Copy of English Proficiency Certificate',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'photo',
                'label' => 'Latest Photograph',
                'type' => 'image'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'thesis',
                'label' => 'Thesis',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'proof',
                'label' => 'Proof',
                'type' => 'file'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'title',
                'label' => 'Title UG Thesis ',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'purpose',
                'label' => 'Purpose',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'country',
                'label' => 'Country',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'institution',
                'label' => 'Institution',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'imigration_office',
                'label' => 'Name Immigration Office',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'company',
                'label' => 'Company',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'duration',
                'label' => 'Duration (months)',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'send_to',
                'label' => 'Send to (surat ditujukan kepada)',
                'type' => 'text'
            ]);
        DB::table('fields')
            ->insert([
                'key' => 'statement_letter',
                'label' => 'Statement letter from parents',
                'type' => 'file'
            ]);
    }
}
