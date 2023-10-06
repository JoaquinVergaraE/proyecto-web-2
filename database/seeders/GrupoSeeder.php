<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    public function run()
    {
        // Primer grupo
        Grupo::create([
            'cod_grupo' => 1,
            'cod_institucion' => 1, // Reemplaza con el código de una institución existente
            'rut_encargado' => '12345678-9', // Reemplaza con un rut de encargado existente
            'cantidad_niños' => 10,
            'cantidad_niñas' => 12,
            'cantidad_adultos' => 2,
            'cantidad_adultas' => 3,
        ]);

        // Segundo grupo
        Grupo::create([
            'cod_grupo' => 2,
            'cod_institucion' => 2, // Reemplaza con el código de otra institución existente
            'rut_encargado' => '98765432-1', // Reemplaza con otro rut de encargado existente
            'cantidad_niños' => 8,
            'cantidad_niñas' => 15,
            'cantidad_adultos' => 3,
            'cantidad_adultas' => 2,
        ]);
    }
}
