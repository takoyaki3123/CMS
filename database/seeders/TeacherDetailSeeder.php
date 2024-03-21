<?php

namespace Database\Seeders;

use App\Models\TeacherDetailModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TeacherDetailModel::factory(10)->create();
    }
}
