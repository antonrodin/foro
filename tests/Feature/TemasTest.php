<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TemasTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->tema = factory("App\Tema")->create();
    }

    public function test_usuario_puede_ver_lista_temas()
    {
        $response = $this->get('/temas')
            ->assertSee($this->tema->title);
    }

    public function test_usuario_puede_ver_cualquier_tema()
    {

        $response = $this->get("/temas/{$this->tema->id}")
            ->assertSee($this->tema->title);
    }

    public function test_usuario_puede_ver_respuestas() {

        $reply = factory('App\Respuesta')->create(['tema_id' => $this->tema->id]);

        $response = $this->get("/temas/{$this->tema->id}")
            ->assertSee($reply->body);
    }
}
