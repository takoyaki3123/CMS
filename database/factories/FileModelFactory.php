<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FileModel>
 */
class FileModelFactory extends Factory
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
            'FILE_NAME'=>fake()->name(),
            'FILE_TYPE'=>'PDF',
            'FILE_PATH'=>'C://TEMP',
            'FILE_SIZE'=>'1024MB',
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name(),

        ];
    }
}
