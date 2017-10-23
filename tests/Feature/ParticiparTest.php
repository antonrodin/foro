<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParticiparTest extends TestCase
{


    /**
     * Test no funciona ya que hay que hacer un apaño para lanzar una exepcion si no estas autentificado
     * He añadido que no se vea la respuesta si lo hacemos...
     */
    public function testUsuarioNoAutorizadoCrearRespuesta() {

        //$this->expectException('\Illuminate\Auth\AuthenticationException');

        $tema = factory('App\Tema')->create();
        $respuesta = factory('App\Respuesta')->create();

        $this->post("/temas/{$tema->id}/responder", $respuesta->toArray());
        $this->get("/temas/{$tema->id}")
            ->assertDontSee($respuesta->body);
    }

    public function testUsuarioAutorizadoCrearRespuesta()
    {
        $user = factory('App\User')->create();
        $tema = factory('App\Tema')->create();
        $respuesta = factory('App\Respuesta')->create();

        $this->be($user);
        $this->post("/temas/{$tema->id}/responder", $respuesta->toArray());
        $this->get("/temas/{$tema->id}")
            ->assertSee($respuesta->body);

    }
}
