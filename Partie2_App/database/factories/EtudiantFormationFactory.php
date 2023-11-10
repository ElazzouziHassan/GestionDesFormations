<?php

namespace Database\Factories;

use App\Models\etudiantModel;
use App\Models\formationModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'etudiant_id' => etudiantModel::factory(),
            'formation_id' => formationModel::factory()
        ];
    }
}
