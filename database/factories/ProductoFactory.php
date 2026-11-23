<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition(): array
    {
        $precioCompra = fake()->randomFloat(2, 1000, 80000);

        return [
            'codigo' => fake()->unique()->bothify('PROD-####'),
            'nombre' => fake()->words(2, true),
            'descripcion' => fake()->sentence(),
            'marca' => fake()->company(),
            'precio_compra' => $precioCompra,
            'precio_venta' => round($precioCompra * 1.3, 2),
            'stock_actual' => fake()->numberBetween(0, 100),
            'stock_minimo' => fake()->numberBetween(5, 20),
            'fecha_vencimiento' => fake()->optional()->dateTimeBetween('now', '+2 years'),
            'estado' => fake()->randomElement(['Activo', 'Inactivo']),
            'id_categoria' => Categoria::factory(),
            'id_proveedor' => Proveedor::factory(),
        ];
    }
}

