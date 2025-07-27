<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         // Obtener los usuarios que creaste
        $users = User::whereIn('email', ['admin@example.com', 'juan@example.com', 'ana@example.com'])->get();

        foreach ($users as $user) {
            // Crear 1 o más personas por cada usuario, asignándolos explícitamente
            Persona::factory()->count(2)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
