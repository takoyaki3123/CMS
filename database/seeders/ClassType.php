<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\ClassType::factory(6)->create();
    }
}
