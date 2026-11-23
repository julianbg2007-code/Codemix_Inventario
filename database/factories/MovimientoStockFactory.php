<?php

namespace Database\Factories;

use App\Models\MovimientoStock;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovimientoStockFactory extends Factory
{
    protected $model = MovimientoStock::class;

    public function definition(): array
    {
        $stockAntes = fake()->numberBetween(10, 100);
        $cantidad = fake()->numberBetween(1, 15);

        $tipo = fake()->randomElement([
            'Entrada',
            'Salida',
            'Ajuste'
        ]);

        return [
            'id_producto' => Producto::factory(),
            'id_usuario' => Usuario::factory(),
            'id_proveedor' => null,
            'id_compra' => null,
            'id_venta' => null,
            'tipo_movimiento' => $tipo,
            'cantidad' => $cantidad,
            'stock_antes' => $stockAntes,
            'stock_despues' => $tipo === 'Salida'
                ? max(0, $stockAntes - $cantidad)
                : $stockAntes + $cantidad,
            'motivo' => fake()->sentence(),
        ];
    }
}
