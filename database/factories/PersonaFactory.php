<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Persona::class;
    public function definition()
    {
        return [
            //
            'ci' => $this->faker->unique()->numerify('#########'),
            'nombre' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'fecha_nacimiento' => $this->faker->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d'),
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => User::factory(),  // Esto crea y asigna un usuario automáticamente
            //
        ];
    }
}
