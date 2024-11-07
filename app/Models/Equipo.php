<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','cantidad','nro_serie','codigo','ubicacion','año_ingreso','fecha_actualizacion','adquisicion','estado','codigo_interno','user_id'];

    public function laboratorio(){
        return $this->belongsTo(Laboratorio::class);
    }

    public function horarios(){
        return $this->hasMany(Horario::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
