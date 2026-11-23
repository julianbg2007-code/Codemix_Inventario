<?php

namespace Database\Factories;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('Codemix123*'),
            'estado' => 'activo',
            'intentos' => 0,
            'id_rol' => Rol::factory(),
        ];
    }
}

