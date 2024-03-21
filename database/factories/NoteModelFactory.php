<?php

namespace Database\Factories;

use App\Models\UserModel;
use ClassListModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NoteModel>
 */
class NoteModelFactory extends Factory
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
            'STUDENT_ID'=>UserModel::all()->random()->id,
            'TITLE'=>fake()->name(),
            'CONTENT'=>fake()->text(),
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name(),
        ];
    }
}
