<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreMascotaRequest;
use App\Http\Resources\MascotaResource;
use App\Services\MascotasService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

/**
 * @group Mascotas
 *
 * Endpoints para gestionar mascotas.
 */
class MascotaController extends Controller
{
    protected $service;

    public function __construct(MascotasService $service)
    {
        $this->service = $service;
    }

    /**
     * Listar todas las mascotas
     *
     * Devuelve una lista de todas las mascotas registradas.
     *
     * @response 200 {
     *    "data": [
     *      {
     *          "id": 1,
     *          "nombre": "Firulais",
     *          "especie": "Perro",
     *          ...
     *      }
     *    ]
     * }
     * @response 404 {
     *    "message": "No hay mascotas registradas"
     * }
     */
    public function index(Request $request)
    {
        $perPage = $request->query('per_page', 10);
        $mascotas = $this->service->getAllPaginated($perPage);
        if ($mascotas->isEmpty()) {
            return response()->json(['message' => 'No hay mascotas registradas'], 404);
        }
        return MascotaResource::collection($mascotas);
    }

    /**
     * Crear una nueva mascota
     *
     * @bodyParam nombre string required Nombre de la mascota. Example: Misu
     * @bodyParam especie string required Especie de la mascota. Example: Gato
     * @bodyParam raza string Raza de la mascota. Example: Bengal
     * @bodyParam edad integer Edad en años. Example: 2
     * @bodyParam persona_id integer ID de la persona dueña. Example: 1
    *
     * @response 201 {
     *    "data": {
     *        "id": 1,
     *        "nombre": "Max",
     *        ...
     *    }
     * }
     */
    public function store(StoreMascotaRequest $request)
    {
        $mascota = $this->service->createMascota($request->validated());
        return new MascotaResource($mascota);
    }

    /**
     * Mostrar una mascota por ID
     *
     * @urlParam mascota integer required ID de la mascota. Example: 1
     * @response 200 {
     *    "data": {
     *        "id": 1,
     *        "nombre": "Max",
     *        ...
     *    }
     * }
     * @response 404 {
     *    "message": "Mascota no encontrada"
     * }
     */
    public function show($id)
    {
        $mascota = $this->service->find($id);
        if (!$mascota) {
            return response()->json(['message' => 'Mascota no encontrada'], 404);
        }
        return new MascotaResource($mascota);
    }

    /**
     * Actualizar una mascota
     *
     * @urlParam mascota integer required ID de la mascota. Example: 1
     * @bodyParam nombre string Nombre de la mascota. Example: Max
     * @bodyParam especie string Especie de la mascota. Example: Gato
     * @bodyParam edad integer Edad en años. Example: 3
     *
     * @response 200 {
     *    "data": {
     *        "id": 1,
     *        "nombre": "Max",
     *        ...
     *    }
     * }
     */
    public function update(Request $request, $id)
    {
        $mascota = $this->service->find($id);
        $this->authorize('update', $mascota);

        $mascota = $this->service->update($id, $request->all());
        return new MascotaResource($mascota);
    }

    /**
     * Eliminar una mascota
     *
     * @urlParam mascota integer required ID de la mascota. Example: 1
     *
     * @response 200 {
     *    "message": "Mascota eliminada con éxito"
     * }
     */
    public function destroy($id)
    {
        $mascota = $this->service->find($id);
        $this->authorize('delete', $mascota);
        $this->service->delete($id);
        return response()->json(['message' => 'Mascota eliminada con éxito']);
    }
}
