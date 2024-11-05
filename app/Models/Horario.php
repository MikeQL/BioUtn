<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = ['dia','hora_inicio','hora_fin','equipo_id','laboratorio_id'];

    public function equipo(){
        return $this->belongTo(Equipo::class);
    }
    public function laboratorio(){
        return $this->belongTo(Laboratorio::class);
    }
}
