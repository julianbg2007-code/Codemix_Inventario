<?php

namespace Database\Seeders;

use App\Models\Compra;
use App\Models\Proveedor;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class CompraSeeder extends Seeder
{
    public function run(): void
    {
        $proveedores = Proveedor::pluck('id_proveedor')->all();
        $usuarios = Usuario::pluck('id_usuario')->all();

        if (empty($proveedores) || empty($usuarios)) {
            return;
        }

        for ($i = 0; $i < 10; $i++) {
            Compra::factory()->create([
                'id_proveedor' => fake()->randomElement($proveedores),
                'id_usuario' => fake()->randomElement($usuarios),
            ]);
        }
    }
}
