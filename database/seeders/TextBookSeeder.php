<?php

namespace Database\Seeders;

use App\Models\TextBookModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TextBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TextBookModel::factory(10)->create();
    }
}
