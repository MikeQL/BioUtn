<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    // relacion con el modelo usuarios
    public function user(){
        return $this->belongsTo(User::class);
    }
}
