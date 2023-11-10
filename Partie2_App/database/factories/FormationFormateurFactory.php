<?php

namespace Database\Factories;

use App\Models\formateurModel;
use App\Models\formationModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FormationFormateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'formation_id' => formationModel::factory(),
            'formateur_id' => formateurModel::factory()
        ];
    }
}
