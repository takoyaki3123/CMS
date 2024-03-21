<?php

namespace Database\Factories;

use App\Models\FileModel;
use ClassListModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TextBook>
 */
class TextBookModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'CLASS_ID'=>ClassListModel::all()->random()->id,
            'CONTENT'=>fake()->text(),
            'FILE_ID'=>FileModel::all()->random()->id,
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name(),
        ];
    }
}
