<?php

namespace Database\Factories;

use App\Models\Venta;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    protected $model = Venta::class;

    public function definition(): array
    {
        $total = fake()->randomFloat(2, 10000, 500000);

        return [
            'nombre_factura' => 'FAC-' . fake()->unique()->numerify('######'),
            'descuento' => 0,
            'iva' => round($total * 0.19, 2),
            'total' => round($total * 1.19, 2),
            'estado' => fake()->randomElement([
                'Pendiente',
                'Pagado',
                'Anulada'
            ]),
            'id_usuario' => Usuario::factory(),
        ];
    }
}
