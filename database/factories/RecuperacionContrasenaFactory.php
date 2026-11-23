<?php

namespace Database\Factories;

use App\Models\RecuperacionContrasena;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecuperacionContrasenaFactory extends Factory
{
    protected $model = RecuperacionContrasena::class;

    public function definition(): array
    {
        return [
            'id_usuario' => Usuario::factory(),
            'codigo' => fake()->sha256(),
            'fecha_expiracion' => fake()->dateTimeBetween('now', '+2 days'),
            'usado' => false,
        ];
    }
}
