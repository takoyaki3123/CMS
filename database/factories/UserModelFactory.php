<?php

namespace Database\Factories;

use App\Models\IdentityModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserModelFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'ACCT' => fake()->name(),
          'PWD' => fake()->password(),
          'NAME' => fake()->name(),
          'AGE' => '18',
          'SEX' => '1',
          'IDENTITY_ID' => IdentityModel::all()->random()->id,
          'MODIFIER' => fake()->name(),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
