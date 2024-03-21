<?php

namespace Database\Factories;

use ClassListModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeWorkModel>
 */
class HomeWorkModelFactory extends Factory
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
            'IS_GRP'=>'N',
            'CLASS_ID'=>ClassListModel::all()->random()->id,
            'TITLE'=>fake()->name(),
            'CONTENT'=>fake()->text(),
            'SUBMISSION_TIME'=>fake()->dateTime(),
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name(),
        ];
    }
}
