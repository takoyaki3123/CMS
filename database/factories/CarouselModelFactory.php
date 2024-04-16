<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarouselModel>
 */
class CarouselModelFactory extends Factory
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
            'IMG_SRC' => '/storage/images/補習班1.jpg',
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name()
        ];
    }
}
