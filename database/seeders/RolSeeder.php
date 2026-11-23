<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'nombre_rol' => 'Administrador',
                'descripcion' => 'Tiene acceso completo al sistema.',
            ],
            [
                'nombre_rol' => 'Vendedor',
                'descripcion' => 'Se encarga de gestionar las ventas.',
            ],
            [
                'nombre_rol' => 'Bodeguero',
                'descripcion' => 'Se encarga de gestionar el inventario.',
            ],
        ];

        foreach ($roles as $rol) {
            Rol::firstOrCreate(
                ['nombre_rol' => $rol['nombre_rol']],
                $rol
            );
        }
    }
}
