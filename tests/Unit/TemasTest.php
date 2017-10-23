<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TemasTest extends TestCase
{
    public function testTemaTieneRespuestas()
    {
        $tema = factory('App\Tema')->create();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $tema->respuestas);
    }

    public function testTemaPropietario()
    {
        $tema = factory('App\Tema')->create();
        $this->assertInstanceOf("App\User", $tema->user);
    }

    public function testTemaAddRespuesta() {
        $tema = factory('App\Tema')->create();
        $tema->addRespuesta([
            'body' => 'Foobar',
            'user_id' => 1,
        ]);

        $this->assertCount(1, $tema->respuestas);
    }
}
