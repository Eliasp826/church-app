<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lider extends Model
{
    use HasFactory;
    protected  $fillable = [
        'miembro_id',
    ];

    public function miembros()
    {
        return $this->hasOne(miembros::class, 'miembro_id');
    }
}
