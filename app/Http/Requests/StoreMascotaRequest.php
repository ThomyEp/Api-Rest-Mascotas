<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Request para crear una nueva Mascota
 *
 * @bodyParam nombre string required Nombre de la mascota. Ejemplo: Firulais
 * @bodyParam especie string required Especie de la mascota. Ejemplo: Perro
 * @bodyParam raza string required Raza de la mascota. Ejemplo: Labrador
 * @bodyParam edad integer required Edad en años (entero, mínimo 0). Ejemplo: 5
 * @bodyParam persona_id integer required ID de la persona dueña, debe existir en la tabla personas. Ejemplo: 1
 */
class StoreMascotaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:50',
            'raza' => 'required|string|max:50',
            'edad' => 'required|integer|min:0',
            'persona_id' => 'required|exists:personas,id',
        ];
    }
}
