<?php

namespace Database\Factories;

use App\Models\ClassListModel;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\STUDENT_SELECT_CLASS>
 */
class StudentSelectClassModelFactory extends Factory
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
            'STUDENT_ID' => UserModel::all()->random()->id,
            'CLASS_ID' => ClassListModel::all()->random()->id,
            'GRADUATED' => '0',
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name()
        ];
    }
}
