<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{

    /** @test **/
    function it_loads_the_users_list_page()
    {
        // cargamos la url
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    /** @test **/
    function it_loads_the_users_details_page()
    {
        // accedemos al usuario con id 5
        $this->get('/usuarios/5')
            // esperamos que la pagina carge correctamente
            ->assertStatus(200)
            // deberiamos ver el mensaje
            ->assertSee("Mostrando detalle del usuario: 5");
    }

    /** @test **/
    function it_loads_the_new_users_page()
    {
        // accedemos al usuario nuevo
        $this->get('/usuarios/nuevo')
            // esperamos que la pagina carge correctamente
            ->assertStatus(200)
            // deberiamos ver el mensaje
            ->assertSee("Crear nuevo usuario");
    }
}
