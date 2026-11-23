<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Proveedor;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = Categoria::pluck('id_categoria')->all();
        $proveedores = Proveedor::pluck('id_proveedor')->all();

        if (empty($categorias) || empty($proveedores)) {
            return;
        }

        for ($i = 0; $i < 30; $i++) {
            Producto::factory()->create([
                'id_categoria' => fake()->randomElement($categorias),
                'id_proveedor' => fake()->randomElement($proveedores),
            ]);
        }
    }
}
