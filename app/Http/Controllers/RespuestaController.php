<?php

namespace App\Http\Controllers;

use App\Tema;
use App\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Tema $tema)
    {
        $tema->addRespuesta([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return back();
    }

}
