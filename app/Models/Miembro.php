<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Miembro extends Model
{
    use HasFactory;
    protected $fillable = [];

    // Accesores y Mutators (Opcionales)

    public function getEdadCompletaAttribute()
    {
        if (!$this->fecha_nacimiento) {
            return null;
        }
        $edad = Carbon::parse($this->fecha_nacimiento)->diffInYears(now());
        return $edad . ' años';
    }
    public function actividades()
    {
        return $this->hasMany(Actividades::class);
    }
    public function grupos()
    {
     //   return $this->belongsToMany(Grupo::class);
    }
}


