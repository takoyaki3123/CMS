<?php

namespace Database\Seeders;

use App\Models\GradeModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        GradeModel::factory(20)->create();
    }
}
