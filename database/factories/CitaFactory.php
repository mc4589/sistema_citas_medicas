<?php

namespace Database\Factories;

use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    protected $model = \App\Models\Cita::class;

    public function definition(): array
    {
        $this->faker->locale = 'es_ES'; 

        return [
            'fecha' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'hora' => $this->faker->time('H:i:s'),
            'descripcion' => $this->faker->sentence(), 
            'medico_id' => Medico::inRandomOrder()->first()->id,
            'paciente_id' => Paciente::inRandomOrder()->first()->id,
        ];
    }
}