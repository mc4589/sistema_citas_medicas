<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'especialidad', 'email'];

    /**
     * Relación: Un médico tiene muchas citas
     */
    public function citas(): HasMany
    {
        return $this->hasMany(Cita::class);
    }

    /**
     * Scope: Médicos por especialidad
     */
    public function scopePorEspecialidad($query, $especialidad)
    {
        return $query->where('especialidad', $especialidad);
    }

    /**
     * Scope: Médicos con citas hoy
     */
    public function scopeConCitasHoy($query)
    {
        return $query->whereHas('citas', function ($q) {
            $q->whereDate('fecha', today());
        });
    }
}

