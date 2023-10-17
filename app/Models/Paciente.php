<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id', 'id');
    }
}
