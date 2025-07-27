<?php

namespace App\Services;

use App\Repositories\PersonasRepository;

class PersonasService
{
    protected $personaRepository;

    public function __construct(PersonasRepository $personasRepository)
    {
        $this->personasRepository = $personasRepository;
    }

    public function getAll()
    {
        return $this->personasRepository->getAll();
    }

    public function getAllPaginated($perPage = 10)
    {
        return $this->personasRepository->getAllPaginated($perPage);
    }

    public function create(array $data)
    {
        return $this->personasRepository->create($data);
    }

    public function find($id)
    {
        return $this->personasRepository->find($id);
    }

    public function update($id, array $data)
    {
        
        return $this->personasRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->personasRepository->delete($id);
    }

    public function findWithMascotas($id)
    {
        return $this->personasRepository->findWithMascotas($id);
    }
}
