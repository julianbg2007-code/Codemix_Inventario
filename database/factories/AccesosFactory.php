<?php

namespace Database\Factories;

use App\Models\Accesos;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccesosFactory extends Factory
{
    protected $model = Accesos::class;

    public function definition(): array
    {
        return [
            'id_usuario' => Usuario::factory(),
            'dispositivo' => fake()->randomElement([
                'Computador',
                'Portatil'
                
            ]),
            'navegador' => fake()->randomElement([
                'Chrome',
                'Firefox',
                'Edge'
            ]),
            'ubicacion' => fake()->city(),
            'fecha_ingreso' => fake()->date(),
            'fecha_salida' => fake()->optional()->date(),
            'estado' => 'activo',
        ];
    }
}
