<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','cantidad','nro_serie','codigo','ubicacion','user_id'];

    public function laboratorio(){
        return $this->belongsTo(Laboratorio::class);
    }

    public function horarios(){
        return $this->hasMany(Horario::class);
    }
}
