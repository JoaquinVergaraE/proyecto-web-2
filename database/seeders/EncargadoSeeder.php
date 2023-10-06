<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Encargado;

class EncargadoSeeder extends Seeder
{
    public function run()
    {
        // Primer encargado
        Encargado::create([
            'rut_encargado' => '12345678-9',
            'nom_encargado' => 'Juan Pérez',
            'telefono' => '555-123-456',
            'correo' => 'juan.perez@example.com',
        ]);

        // Segundo encargado
        Encargado::create([
            'rut_encargado' => '98765432-1',
            'nom_encargado' => 'María González',
            'telefono' => '555-789-123',
            'correo' => 'maria.gonzalez@example.com',
        ]);
    }
}
