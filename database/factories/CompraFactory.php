<?php

namespace Database\Factories;

use App\Models\Compra;
use App\Models\Proveedor;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    protected $model = Compra::class;

    public function definition(): array
    {
        return [
            'total' => fake()->randomFloat(2, 10000, 1000000),
            'estado' => fake()->randomElement([
                'Pendiente',
                'Recibido',
                'Anulada'
            ]),
            'id_proveedor' => Proveedor::factory(),
            'id_usuario' => Usuario::factory(),
        ];
    }
}
