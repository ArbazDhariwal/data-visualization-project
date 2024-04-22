<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Insert sample data into the sample_data table
       DB::table('sample_data')->insert([
        ['name' => 'Item A', 'value' => 10],
        ['name' => 'Item B', 'value' => 20],
        ['name' => 'Item C', 'value' => 30],
    ]);
    }
}
