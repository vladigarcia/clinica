<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id', 'id');
    }
    public function day(){
        return $this->belongsTo(Dia::class,'dia_trabajo', 'id');
    }
}
