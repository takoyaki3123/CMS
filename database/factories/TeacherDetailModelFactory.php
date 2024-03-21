<?php

namespace Database\Factories;

use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TEACHER_DETAIL>
 */
class TeacherDetailModelFactory extends Factory
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
            'id' => UserModel::all()->random()->id,
            'NAME' => fake()->name(),
            'GRADUATED_SCHOOL' => fake()->name(),
            'IMG_SRC' => '/storage/images/補習班1.jpg',
            'EXPERTISE' => fake()->name(),
            'EMAIL' => fake()->email(),
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name()
        ];
    }
}
