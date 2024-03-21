<?php

namespace Database\Seeders;

use App\Models\NoteModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        NoteModel::factory(10)->create();
    }
}
