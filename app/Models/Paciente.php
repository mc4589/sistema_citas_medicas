<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'telefono'];

    /**
     * Relación: Un paciente tiene muchas citas
     */
    public function citas(): HasMany
    {
        return $this->hasMany(Cita::class);
    }

    /**
     * Scope: Pacientes con teléfono
     */
    public function scopeConTelefono($query)
    {
        return $query->whereNotNull('telefono');
    }

    /**
     * Scope: Pacientes con citas pendientes
     */
    public function scopeConCitasPendientes($query)
    {
        return $query->whereHas('citas', function ($q) {
            $q->where('fecha', '>', today());
        });
    }
}
