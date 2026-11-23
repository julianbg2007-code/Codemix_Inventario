<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    protected $model = Proveedor::class;

    public function definition(): array
    {
        return [
            'nombre_proveedor' => fake()->company(),
            'contacto' => fake()->name(),
            'telefono' => fake()->numerify('3#########'),
            'correo' => fake()->unique()->companyEmail(),
            'direccion' => fake()->address(),
            'estado' => fake()->randomElement(['Activo', 'Inactivo']),
        ];
    }
}
