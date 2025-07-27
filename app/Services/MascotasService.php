<?php

namespace App\Services;

use App\Models\Mascota;
use App\Repositories\MascotasRepository;
use Illuminate\Support\Facades\Http;

class MascotasService
{
    protected $repository;

    public function __construct(MascotasRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function getAllPaginated($perPage = 10)
    {
        return Mascota::paginate($perPage);
    }

    public function createMascota(array $data)
    {
        if (strtolower($data['especie']) === 'gato') {
            $response = Http::withHeaders([
                'x-api-key' => config('services.cat_api.key'),
            ])->get(config('services.cat_api.base_url') . '/breeds/search', [
                'q' => $data['raza']
            ]);

            if ($response->successful() && count($response->json()) > 0) {
                $catData = $response->json()[0];
                $data['descripcion'] = $catData['temperament'] ?? null;

                $imagesResponse = Http::withHeaders([
                    'x-api-key' => config('services.cat_api.key'),
                ])->get(config('services.cat_api.base_url') . '/images/search', [
                    'breed_id' => $catData['id'],
                    'limit' => 1,
                ]);

                if ($imagesResponse->successful() && count($imagesResponse->json()) > 0) {
                    $data['imagen'] = $imagesResponse->json()[0]['url'];
                }
            }
        }

        return $this->repository->create($data);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update($id, array $data)
    {
        $mascota = $this->find($id);
        $mascota->update($data);
        return $mascota;
    }
    
}
