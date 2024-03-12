<?php

namespace Database\Factories;

use ClassTypeModel;
use Database\Seeders\ClassType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassListModel>
 */
class ClassListModelFactory extends Factory
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
            'CLASS_NAME' => fake()->name(),
            'TYPE_ID' => ClassTypeModel::all()->random()->id,
            'TEACHER_ID' => fake()->numberBetween(1,100),
            'IMG_SRC' => '/storage/images/補習班1.jpg',
            'DESCRIBE' => fake()->text(),
            'START_DATE' => fake()->date(),
            'CLASS_WEEK_DAY' => fake()->numberBetween(1,7),
            'START_TIME' => fake()->time(),
            'END_TIME' => fake()->time(),
            'CLASS_WEEK' => 16,
            'CREATOR' => 'CMS',
            'MODIFIER' => 'CMS'
        ];
    }
}
