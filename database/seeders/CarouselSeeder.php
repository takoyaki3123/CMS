<?php

namespace Database\Seeders;

use App\Models\CarouselModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CarouselModel::factory(5)->create();
    }
}
