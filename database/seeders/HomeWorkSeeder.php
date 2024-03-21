<?php

namespace Database\Seeders;

use App\Models\HomeWorkModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        HomeWorkModel::factory(20)->create();
    }
}
