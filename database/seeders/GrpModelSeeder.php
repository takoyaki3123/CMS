<?php

namespace Database\Seeders;

use App\Models\GrpModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrpModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        GrpModel::factory(3)->create();
    }
}
