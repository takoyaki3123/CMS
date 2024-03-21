<?php

namespace Database\Factories;

use App\Models\ClassListModel;
use App\Models\TeacherDetailModel;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher_Assistant>
 */
class TeacherAssistantModelFactory extends Factory
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
            'CLASS_ID' => ClassListModel::all()->random()->id,
            'TEACH_ID' => TeacherDetailModel::all()->random()->id,
            'USER_ID' => UserModel::all()->random()->id,
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name()
        ];
    }
}
