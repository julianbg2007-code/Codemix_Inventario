<?php

namespace Database\Seeders;

use App\Models\Venta;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = Usuario::pluck('id_usuario')->all();

        if (empty($usuarios)) {
            return;
        }

        for ($i = 0; $i < 10; $i++) {
            Venta::factory()->create([
                'id_usuario' => fake()->randomElement($usuarios),
            ]);
        }
    }
}
