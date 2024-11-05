<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    use HasFactory;

    //permite un manera de registro más rápida
    protected $fillable = ['nombre','ubicacion','capacidad','telefono','estado'];

    public function equipos(){
        return $this->hasMany(Equipo::class);
    }

    public function horarios(){
        return $this->hasMany(Horario::class);
    }
}
