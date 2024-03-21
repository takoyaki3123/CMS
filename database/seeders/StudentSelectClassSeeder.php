<?php

namespace Database\Seeders;

use App\Models\StudentSelectClassModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSelectClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        StudentSelectClassModel::factory(10)->create();
    }
}
