<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupos extends Model
{
    protected $table = 'grupos';
    use HasFactory;
    protected  $fillable =[
        'nombre',
        'descripcion',
        'lider_id',
    ];

    public  function lider()
    {
        return $this->belongsTo(Miembro::class, 'lider_id');

    }
}
