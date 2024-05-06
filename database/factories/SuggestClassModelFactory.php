<?php

namespace Database\Factories;

use ClassListModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuggestClassModel>
 */
class SuggestClassModelFactory extends Factory
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

            'CLASS_ID' => fake()->unique()->numberBetween(1,10),
            'DESC' => fake()->text('500'),
            'IMG_SRC' => '/storage/images/補習班1.jpg',
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name()
        ];
    }
}
