<?php

namespace Tests\Unit;

use App\Models\Persona;
use App\Repositories\PersonasRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use Tests\TestCase;

class PersonasRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function testGetAllReturnsCollection()
    {
        // Arrange: Creamos datos de prueba en la base de datos
        Persona::factory()->count(3)->create();

        // Act: Instanciamos el repositorio real
        $repo = new PersonasRepository();
        $result = $repo->getAll();

        // Assert: Verificamos que se obtuvieron correctamente
        $this->assertCount(3, $result);
        $this->assertInstanceOf(\Illuminate\Support\Collection::class, $result);
    }

    public function testCreatePersona()
    {
        $repo = new PersonasRepository();

        $user = \App\Models\User::factory()->create(); // Crear un usuario para asignar

        $data = [
            'ci' => '12345678',
            'nombre' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'fecha_nacimiento' => '1990-01-01',
             'user_id' => $user->id,  // Asignar user_id obligatorio
        ];

        $persona = $repo->create($data);

        $this->assertDatabaseHas('personas', ['nombre' => 'Juan Pérez']);
        $this->assertEquals('Juan Pérez', $persona->nombre);
    }

    public function testFindPersonaById()
    {
        $persona = Persona::factory()->create();

        $repo = new PersonasRepository();
        $found = $repo->find($persona->id);

        $this->assertNotNull($found);
        $this->assertEquals($persona->nombre, $found->nombre);
    }
}
