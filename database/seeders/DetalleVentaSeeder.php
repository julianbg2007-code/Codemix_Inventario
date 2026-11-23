<?php

namespace Database\Seeders;

use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DetalleVentaSeeder extends Seeder
{
    public function run(): void
    {
        $ventas = Venta::pluck('id_venta')->all();
        $productos = Producto::pluck('id_producto')->all();

        if (empty($ventas) || empty($productos)) {
            return;
        }

        foreach ($ventas as $idVenta) {
            $total = 0;

            for ($i = 0; $i < 2; $i++) {
                $detalle = DetalleVenta::factory()->make([
                    'id_venta' => $idVenta,
                    'id_producto' => fake()->randomElement($productos),
                ]);

                $detalle->save();

                $total += $detalle->subtotal;
            }

            Venta::where('id_venta', $idVenta)->update([
                'descuento' => 0,
                'iva' => round($total * 0.19, 2),
                'total' => round($total * 1.19, 2),
            ]);
        }
    }
}
