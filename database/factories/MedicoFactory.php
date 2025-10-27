<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    protected $model = \App\Models\Medico::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'especialidad' => $this->faker->randomElement(['Cardiología', 'Pediatría', 'Dermatología', 'Neurología']),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}