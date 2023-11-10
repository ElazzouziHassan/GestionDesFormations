<?php

namespace Database\Factories;

use App\Models\adminModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormationModel>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_debut' => $this->faker->date(),
            'prix' => $this->faker->randomFloat(10,2),
            'duree_en_mois' => $this->faker->randomDigitNotNull(),
            'intitule' => $this->faker->unique()->regexify('[A-Za-z0-9]{1,80}'),
            'description' => $this->faker->text(),
            'administrateur_id' => adminModel::factory()
        ];
    }
}
