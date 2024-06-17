<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Miembro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'genero',
        'fecha_nacimiento',
        'edad',
        'provincia',
        'direccion',
        'celular1',
        'celular2',
        'correo_electronico',
        'estado_civil',
        'fecha_conversion',
        'fecha_bautismo',
        'recomendadcion',
        'descirpcion',
        'imagen',

    ];

    // Accesores y Mutators (Opcionales)

    public function getEdadCompletaAttribute()
    {
        if (!$this->fecha_nacimiento) {
            return null;
        }
        $edad = Carbon::parse($this->fecha_nacimiento)->diffInYears(now());
        return $edad . ' años';
    }

    // Relaciones de tablas (Opcionales)
    public function actividades()
    {
        return $this->hasMany(Actividades::class);
    }
    public function grupos()
    {
       return $this->belongsToMany(Grupos::class);
    }

}


