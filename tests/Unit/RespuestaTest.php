<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RespuestaTest extends TestCase
{

    public function testTienePropietario()
    {
        $respuesta = factory('App\Respuesta')->create();
        $this->assertInstanceOf("App\User", $respuesta->user);
    }
}
