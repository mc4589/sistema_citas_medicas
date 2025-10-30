<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    public function definition(): array
    {
        $especialidades = [
            'Cardiología', 'Pediatría', 'Dermatología', 'Neurología',
            'Ginecología', 'Traumatología', 'Oftalmología', 'Psiquiatría',
            'Endocrinología', 'Neumología'
        ];

        return [
            'nombre' => fake()->name(),
            'especialidad' => fake()->randomElement($especialidades),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
