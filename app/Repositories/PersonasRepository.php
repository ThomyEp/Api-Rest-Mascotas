<?php

namespace App\Repositories;

use App\Models\Persona;

class PersonasRepository
{
   
    public function getAllPaginated($perPage = 10)
    {
        return Persona::all();
    }

    public function getAll()
    {
        return Persona::all();
    }

    public function find($id)
    {
        return Persona::find($id);
    }

    public function create(array $data)
    {
        return Persona::create($data);
    }

    public function update($id, array $data)
    {
        $persona = Persona::find($id);
        if ($persona) {
            $persona->update($data);
        }
        return $persona;
    }

    public function delete($id)
    {
        $persona = Persona::find($id);
        if ($persona) {
            $persona->delete();
        }
        return $persona;
    }

    public function findWithMascotas($id)
    {
        return Persona::with('mascotas')->find($id);
    }
}
