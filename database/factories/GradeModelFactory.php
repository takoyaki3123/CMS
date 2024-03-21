<?php

namespace Database\Factories;

use App\Models\UserModel;
use ClassListModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GradeModel>
 */
class GradeModelFactory extends Factory
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
            'TYPE'=>'W',
            'CLASS_ID'=>ClassListModel::all()->random()->id,
            'GRADE'=>'100',
            'STUDENT_ID'=>UserModel::all()->random()->id,
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name(),
        ];
    }
}
