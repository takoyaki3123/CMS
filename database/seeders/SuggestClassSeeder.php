<?php

namespace Database\Seeders;

use App\Models\SuggestClassModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuggestClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SuggestClassModel::factory(3)->create();
    }
}
