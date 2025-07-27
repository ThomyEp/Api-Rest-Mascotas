<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaRequest;
use App\Http\Resources\PersonaResource;
use App\Services\PersonasService;
use Illuminate\Http\Request;

/**
 * @group Personas
 *
 * Endpoints para gestionar personas.
 */

class PersonaController extends Controller
{
    protected $service;

    public function __construct(PersonasService $service)
    {
        $this->service = $service;
    }

    /**
     * Listar personas
     * 
     * @authenticated
     * 
     * Devuelve un listado de todas las personas registradas.
     * 
     * @response 200 [
     *   {
     *     "id": 1,
     *     "nombre": "Juan Pérez",
     *     "ci": "12345678",
     *     "email": "juan@example.com",
     *     "fecha_nacimiento": "1990-01-01"
     *   }
     * ]
     * 
     * @response 404 {
     *   "message": "No hay personas registradas"
     * }
     */
    public function index()
    {
        $personas = $this->service->getAllPaginated();

        if ($personas->isEmpty()) {
            return response()->json(['message' => 'No hay personas registradas'], 404);
        }

        return PersonaResource::collection($personas);
    }

    /**
     * Registrar una nueva persona
     * 
     * @authenticated
     * 
     * Crea una nueva persona con los datos proporcionados.
     * 
     * @bodyParam nombre string required Nombre completo. Example: María López
     * @bodyParam ci string required Carnet de identidad. Example: 7894561
     * @bodyParam email string required Correo electrónico. Example: maria@example.com
     * @bodyParam fecha_nacimiento date required Fecha de nacimiento. Example: 1995-06-23
     * 
     * @response 201 {
     *   "id": 2,
     *   "nombre": "María López",
     *   "ci": "7894561",
     *   "email": "maria@example.com",
     *   "fecha_nacimiento": "1995-06-23"
     * }
     */
    public function store(PersonaRequest $request)
    {
       $data = $request->validated();
       $data['user_id'] = auth()->id(); // Asigna el usuario autenticado
       $persona = $this->service->create($data);

        return (new PersonaResource($persona))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Ver persona por ID
     * 
     * @authenticated
     * 
     * Muestra la información de una persona específica.
     * 
     * @urlParam persona integer required ID de la persona. Example: 1
     * 
     * @response 200 {
     *   "id": 1,
     *   "nombre": "Juan Pérez",
     *   "ci": "12345678",
     *   "email": "juan@example.com",
     *   "fecha_nacimiento": "1990-01-01"
     * }
     * 
     * @response 404 {
     *   "message": "Persona no encontrada"
     * }
     */
    public function show($id)
    {
        $persona = $this->service->find($id);

        if (!$persona) {
            return response()->json(['message' => 'Persona no encontrada'], 404);
        }

        $this->authorize('view', $persona);

        return new PersonaResource($persona);
    }

    /**
     * Actualizar persona
     * 
     * @authenticated
     * 
     * Modifica los datos de una persona existente.
     * 
     * @urlParam persona integer required ID de la persona. Example: 1
     * @bodyParam nombre string required Nombre completo. Example: Carlos Gómez
     * @bodyParam ci string required Carnet de identidad. Example: 6543210
     * @bodyParam email string required Correo electrónico. Example: carlos@example.com
     * @bodyParam fecha_nacimiento date required Fecha de nacimiento. Example: 1985-10-10
     * 
     * @response 200 {
     *   "id": 1,
     *   "nombre": "Carlos Gómez",
     *   "ci": "6543210",
     *   "email": "carlos@example.com",
     *   "fecha_nacimiento": "1985-10-10"
     * }
     * 
     * @response 404 {
     *   "message": "Persona no encontrada"
     * }
     */
    public function update(PersonaRequest $request, $id)
    {
        $persona = $this->service->find($id);

        if (!$persona) {
            return response()->json(['message' => 'Persona no encontrada'], 404);
        }

        $this->authorize('update', $persona);

        $persona = $this->service->update($id, $request->validated());

        return  (new PersonaResource($persona))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Eliminar persona
     * 
     * @authenticated
     * 
     * Elimina una persona por su ID.
     * 
     * @urlParam persona integer required ID de la persona. Example: 3
     * 
     * @response 200 {
     *   "message": "Persona eliminada con éxito"
     * }
     * 
     * @response 404 {
     *   "message": "Persona no encontrada"
     * }
     */
    public function destroy($id)
    {
        $persona = $this->service->find($id);

        if (!$persona) {
            return response()->json(['message' => 'Persona no encontrada'], 404);
        }

        $this->authorize('delete', $persona);

        $this->service->delete($id);

        return response()->json(['message' => 'Persona eliminada con éxito']);
    }

    /**
     * Ver persona con sus mascotas
     * 
     * @authenticated
     * 
     * Muestra una persona junto con sus mascotas asociadas.
     * 
     * @urlParam id integer required ID de la persona. Example: 4
     * 
     * @response 200 {
     *   "id": 4,
     *   "nombre": "Lucía Méndez",
     *   "mascotas": [
     *     {
     *       "id": 1,
     *       "nombre": "Kira",
     *       "especie": "Gato"
     *     }
     *   ]
     * }
     * 
     * @response 404 {
     *   "message": "Persona no encontrada"
     * }
     */
    public function showWithMascotas($id)
    {
        $persona = $this->service->findWithMascotas($id);

        if (!$persona) {
            return response()->json(['message' => 'Persona no encontrada'], 404);
        }
        $this->authorize('view', $persona);

        return new PersonaResource($persona);
    }
}
