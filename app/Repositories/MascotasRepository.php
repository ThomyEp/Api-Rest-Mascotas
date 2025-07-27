<?php

namespace App\Repositories;

use App\Models\Mascota;

class MascotasRepository
{
    public function getAllPaginated($perPage = 10)
    {
        return Mascota::all();
    }

    public function find($id)
    {
        return Mascota::find($id);
    }

    public function create(array $data)
    {
        return Mascota::create($data);
    }

    public function update($id, array $data)
    {
        $mascota = Mascota::find($id);
        if ($mascota) {
            $mascota->update($data);
        }
        return $mascota;
    }

    public function delete($id)
    {
        $mascota = Mascota::find($id);
        if ($mascota) {
            $mascota->delete();
        }
        return $mascota;
    }
}
