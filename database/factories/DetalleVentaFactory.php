<?php

namespace Database\Factories;

use App\Models\DetalleVenta;
use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleVentaFactory extends Factory
{
    protected $model = DetalleVenta::class;

    public function definition(): array
    {
        $cantidad = fake()->numberBetween(1, 10);
        $precio = fake()->randomFloat(2, 2000, 150000);

        return [
            'id_venta' => Venta::factory(),
            'id_producto' => Producto::factory(),
            'cantidad' => $cantidad,
            'precio_unitario' => $precio,
            'subtotal' => round($cantidad * $precio, 2),
        ];
    }
}
