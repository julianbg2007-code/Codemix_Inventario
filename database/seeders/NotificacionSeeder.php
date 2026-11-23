<?php

namespace Database\Seeders;

use App\Models\Notificacion;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class NotificacionSeeder extends Seeder
{
    public function run(): void
    {
        $productos = Producto::pluck('id_producto')->all();
        $usuarios = Usuario::pluck('id_usuario')->all();

        if (empty($productos) || empty($usuarios)) {
            return;
        }

        for ($i = 0; $i < 15; $i++) {
            Notificacion::factory()->create([
                'id_producto' => fake()->randomElement($productos),
                'id_usuario' => fake()->randomElement($usuarios),
            ]);
        }
    }
}
