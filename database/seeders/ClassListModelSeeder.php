<?php

namespace Database\Seeders;

use App\Models\ClassListModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassListModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ClassListModel::factory(10)->create();
    }
}
