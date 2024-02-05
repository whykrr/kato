<?php

namespace Database\Factories;

use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserModelFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake('id_ID')->name,
            'email' => fake('id_ID')->email,
            'phone' => str_replace(['+', '(', ')', ' '], '', fake('id_ID')->phoneNumber),
            'password' => Hash::make('password'),
            'email_verified_token' => Str::random(50),
            'email_verified_at' => now(),
        ];
    }
}
