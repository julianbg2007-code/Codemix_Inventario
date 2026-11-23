<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            [
                'nombre_categoria' => 'Aseo',
                'descripcion' => 'Productos de aseo y limpieza.',
                'estado' => 'Activo',
            ],
            [
                'nombre_categoria' => 'Alimentos',
                'descripcion' => 'Productos alimenticios.',
                'estado' => 'Activo',
            ],
            [
                'nombre_categoria' => 'Bebidas',
                'descripcion' => 'Bebidas y refrescos.',
                'estado' => 'Activo',
            ],
            [
                'nombre_categoria' => 'Papeleria',
                'descripcion' => 'Productos de papeleria.',
                'estado' => 'Activo',
            ],
            [
                'nombre_categoria' => 'Tecnologia',
                'descripcion' => 'Productos tecnologicos.',
                'estado' => 'Activo',
            ],
        ];

        foreach ($categorias as $categoria) {
            Categoria::firstOrCreate(
                ['nombre_categoria' => $categoria['nombre_categoria']],
                $categoria
            );
        }
    }
}
