<?php

namespace Database\Factories;

use App\Models\DetalleCompra;
use App\Models\Compra;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleCompraFactory extends Factory
{
    protected $model = DetalleCompra::class;

    public function definition(): array
    {
        $cantidad = fake()->numberBetween(1, 20);
        $precio = fake()->randomFloat(2, 1000, 80000);

        return [
            'id_compra' => Compra::factory(),
            'id_producto' => Producto::factory(),
            'cantidad' => $cantidad,
            'precio_compra' => $precio,
            'subtotal' => round($cantidad * $precio, 2),
        ];
    }
}
