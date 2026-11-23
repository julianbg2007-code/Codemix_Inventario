<?php

namespace Database\Seeders;

use App\Models\Accesos;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class AccesosSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = Usuario::pluck('id_usuario')->all();

        if (empty($usuarios)) {
            return;
        }

        for ($i = 0; $i < 15; $i++) {
            Accesos::factory()->create([
                'id_usuario' => fake()->randomElement($usuarios),
            ]);
        }
    }
}
