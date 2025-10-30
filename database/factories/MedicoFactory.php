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
            'Endocrinología', 'Neumología', 'Medicina Familiar', 'Medicina Interna', 'Cirugía General',
            'Anestesiología', 'Oncología', 'Urología', 'Otorrinolaringología',
            'Reumatología', 'Gastroenterología', 'Nefrología',
            'Infectología', 'Radiología', 'Emergencias Médicas',
            'Gerontología', 'Obstetricia', 'Hematología', 'Patología Clínica',
            'Rehabilitación Física', 'Genética Médica'
        ];

        return [
            'nombre' => fake()->name(),
            'especialidad' => fake()->randomElement($especialidades),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
