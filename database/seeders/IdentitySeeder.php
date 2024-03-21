<?php

namespace Database\Seeders;

use App\Models\IdentityModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        IdentityModel::factory(3)->create();
    }
}
