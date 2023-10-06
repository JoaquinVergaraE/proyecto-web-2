<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Institucion;

class InstitucionSeeder extends Seeder
{
    public function run()
    {
        // Primera institución
        Institucion::create([
            'cod_institucion' => 1,
            'nom_institucion' => 'Institución A',
            'direccion' => 'Calle 123',
            'comuna' => 'Comuna A',
            'region' => 'Región A',
            'telefono' => '555-111-111',
            'correo' => 'info@instituciona.com',
        ]);

        // Segunda institución
        Institucion::create([
            'cod_institucion' => 2,
            'nom_institucion' => 'Institución B',
            'direccion' => 'Avenida 456',
            'comuna' => 'Comuna B',
            'region' => 'Región B',
            'telefono' => '555-222-222',
            'correo' => 'info@institucionb.com',
        ]);
    }
}
