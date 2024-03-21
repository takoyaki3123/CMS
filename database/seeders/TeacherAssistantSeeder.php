<?php

namespace Database\Seeders;

use App\Models\TeacherAssistantModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherAssistantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TeacherAssistantModel::factory(10)->create();
    }
}
