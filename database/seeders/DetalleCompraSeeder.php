<?php

namespace Database\Seeders;

use App\Models\Compra;
use App\Models\DetalleCompra;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DetalleCompraSeeder extends Seeder
{
    public function run(): void
    {
        $compras = Compra::pluck('id_compra')->all();
        $productos = Producto::pluck('id_producto')->all();

        if (empty($compras) || empty($productos)) {
            return;
        }

        foreach ($compras as $idCompra) {
            $total = 0;

            for ($i = 0; $i < 2; $i++) {
                $detalle = DetalleCompra::factory()->make([
                    'id_compra' => $idCompra,
                    'id_producto' => fake()->randomElement($productos),
                ]);

                $detalle->save();

                $total += $detalle->subtotal;
            }

            Compra::where('id_compra', $idCompra)
                ->update(['total' => $total]);
        }
    }
}
