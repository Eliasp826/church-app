<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Miembro extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function actividades()
    {
        return $this->hasMany(Actividades::class);
    }
}


