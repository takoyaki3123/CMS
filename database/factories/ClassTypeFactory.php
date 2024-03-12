<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassType>
 */
class ClassTypeFactory extends Factory
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
            'TYPE_NAME' => fake()->name(),
            'CODE' => Str::random(2),
            'IMG_SRC' => '/storage/images/補習班1.jpg',
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name()
        ];
    }
}
