<?php

namespace Database\Seeders;

use App\Models\BoardModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        BoardModel::factory(20)->create();
    }
}
