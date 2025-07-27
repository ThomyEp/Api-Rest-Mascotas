<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Request para crear o actualizar una Persona
 *
 * @bodyParam ci string required Cédula de identidad única. Ejemplo: 123456789
 * @bodyParam nombre string required Nombre completo de la persona. Ejemplo: Juan Pérez
 * @bodyParam email string required Correo electrónico válido y único. Ejemplo: juan@example.com
 * @bodyParam fecha_nacimiento date Fecha de nacimiento en formato YYYY-MM-DD. Ejemplo: 1990-05-20
 */
class PersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ci' => 'required|string|max:255|unique:personas,ci',
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:personas,email',
            'fecha_nacimiento' => 'nullable|date', 
        ];
    }
}
