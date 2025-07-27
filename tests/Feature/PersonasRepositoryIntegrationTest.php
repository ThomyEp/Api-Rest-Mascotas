<?php

namespace Tests\Feature;

use App\Models\Persona;
use App\Repositories\PersonasRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PersonasRepositoryIntegrationTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateAndRetrievePersona()
    {
        $repo = new PersonasRepository();

        $user = \App\Models\User::factory()->create(); // Crear un usuario para asignar

        $data = [
            'ci' => '123456789',
            'nombre' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'fecha_nacimiento' => '1990-05-20',
            'user_id' => $user-> id, // Crear y asignar un usuario
        ];

        // Crear persona
        $persona = $repo->create($data);

        // Verificar que está en la base de datos
        $this->assertDatabaseHas('personas', [
            'ci' => '123456789',
            'nombre' => 'Juan Pérez',
        ]);

        // Obtener todas las personas
        $all = $repo->getAll();
        $this->assertCount(1, $all);

        // Buscar por ID
        $found = $repo->find($persona->id);
        $this->assertEquals('juan@example.com', $found->email);
    }
}
