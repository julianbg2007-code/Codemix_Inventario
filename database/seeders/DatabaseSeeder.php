<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolSeeder::class,
            CategoriaSeeder::class,
            ProveedorSeeder::class,
            UsuarioSeeder::class,
            ProductoSeeder::class,
            AccesosSeeder::class,
            CompraSeeder::class,
            VentaSeeder::class,
            DetalleCompraSeeder::class,
            DetalleVentaSeeder::class,
            MovimientoStockSeeder::class,
            NotificacionSeeder::class,
            RecuperacionContrasenaSeeder::class,
        ]);
    }
}

