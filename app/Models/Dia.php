<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $table = 'dias';
    
    public function horarios(){
        return $this->hasMany(Horario::class);
    }
}

