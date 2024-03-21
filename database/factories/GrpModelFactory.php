<?php

namespace Database\Factories;

use App\Models\UserModel;
use ClassListModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GrpModel>
 */
class GrpModelFactory extends Factory
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
            'GRP_NAME'=>fake()->name(),
            'GRP_LEADER'=>UserModel::all()->random()->id,
            'CREATOR' => fake()->name(),
            'MODIFIER' => fake()->name(),
        ];
    }
}
