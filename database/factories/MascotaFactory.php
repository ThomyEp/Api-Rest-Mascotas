<?php

namespace Database\Factories;

use App\Models\Mascota;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Mascota::class;

    public function definition()
    {
         return [
            'nombre' => $this->faker->firstName(), // mejor usar nombre de mascota
            'especie' => 'Gato', // solo gatos
            'raza' => $this->faker->word,
            'edad' => $this->faker->numberBetween(1, 15),
            'persona_id' => Persona::factory(), // Crea una persona asociada
            'descripcion' => $this->faker->sentence,
            'imagen' => $this->faker->imageUrl(640, 480, 'cats', true, 'Cat'), // imagen de gatos
        ];
    }
}
