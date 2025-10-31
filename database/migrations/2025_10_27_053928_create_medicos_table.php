<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especialidad');//creo columna de especialidad
            $table->string('email')->unique();//creo string, que evita correos repetidos
            $table->index('especialidad', 'idx_medico_especialidad');//indice de especialidades medicas
            $table->index('email', 'idx_medico_email');//creo indice de medicos
            $table->comment('Tabla de medicos con indices para busquedas rapidas');//etiqueta de tabla de medicos......
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
