<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Actividades extends Model
{
    use HasFactory;
    protected $fillable = [];


    public function AreasDeServicio()
    {
        return $this->belongsTo(AreasDeServicio::class);
    }
}
