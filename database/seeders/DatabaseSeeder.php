<?php

namespace Database\Seeders;

use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Cita;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Medico::factory(100)->create();
        Paciente::factory(100)->create();
        Cita::factory(100)->create();
    }
}