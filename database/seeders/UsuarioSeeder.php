<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        $administrador = Rol::where(
            'nombre_rol', 'Administrador'
        )->firstOrFail();

        $vendedor = Rol::where(
            'nombre_rol', 'Vendedor'
        )->firstOrFail();

        $bodeguero = Rol::where(
            'nombre_rol', 'Bodeguero'
        )->firstOrFail();

        Usuario::firstOrCreate(
            ['email' => 'admin@codemix.test'],
            [
                'nombre' => 'Administrador Codemix',
                'password' => Hash::make('Codemix123*'),
                'estado' => 'activo',
                'intentos' => 0,
                'id_rol' => $administrador->id_rol,
            ]
        );

        Usuario::firstOrCreate(
            ['email' => 'vendedor@codemix.test'],
            [
                'nombre' => 'Vendedor Codemix',
                'password' => Hash::make('Codemix123*'),
                'estado' => 'activo',
                'intentos' => 0,
                'id_rol' => $vendedor->id_rol,
            ]
        );

        Usuario::firstOrCreate(
            ['email' => 'bodega@codemix.test'],
            [
                'nombre' => 'Bodeguero Codemix',
                'password' => Hash::make('Codemix123*'),
                'estado' => 'activo',
                'intentos' => 0,
                'id_rol' => $bodeguero->id_rol,
            ]
        );

        Usuario::factory()->count(7)->create([
            'id_rol' => $vendedor->id_rol,
        ]);
    }
}
