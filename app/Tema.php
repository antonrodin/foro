<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function respuestas() {
        return $this->hasMany(Respuesta::class);
    }

    public function addRespuesta($respuesta) {
        $this->respuestas()->create($respuesta);
    }
}
