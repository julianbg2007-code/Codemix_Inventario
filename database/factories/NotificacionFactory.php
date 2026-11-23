<?php

namespace Database\Factories;

use App\Models\Notificacion;
use App\Models\Usuario;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificacionFactory extends Factory
{
    protected $model = Notificacion::class;

    public function definition(): array
    {
        $tipo = fake()->randomElement([
            'Bajo_Stock',
            'Agotado',
            'Proximo_Vencimiento'
        ]);

        return [
            'id_usuario' => Usuario::factory(),
            'id_producto' => Producto::factory(),
            'titulo' => 'Notificacion de inventario',
            'mensaje' => fake()->sentence(),
            'leido' => fake()->boolean(),
            'fecha' => fake()->dateTime(),
            'tipo_alerta' => $tipo,
        ];
    }
}

