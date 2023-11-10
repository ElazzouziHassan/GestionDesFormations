<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdminModel>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cin' => strtoupper($this->faker->randomLetter().$this->faker->randomDigit(6,8)),
            'nom' => $this->faker->name(),
            'date_naissance' => $this->faker->date(),
            'adresse' => $this->faker->address(),
            'adresse_email' => $this->faker->email(),
            'numero_telephone' => $this->faker->phoneNumber()
        ];
    }
}
