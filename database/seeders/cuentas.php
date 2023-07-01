<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class cuentas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cuentas')->insert([
            [
                'user' => 'joaquin_vergara',
                'password' => Hash::make('jv1'),
                'nombre' => 'Joaquin',
                'apellido' => 'Vergara',
                'perfil_id' => 1,
            ],
            [
                'user' => 'ian_dodman',
                'password' => Hash::make('ia2'),
                'nombre' => 'Ian',
                'apellido' => 'Dodman',
                'perfil_id' => 2,
            ],
            [
                'user' => 'carlos_guerra',
                'password' => Hash::make('cg2'),
                'nombre' => 'Carlos',
                'apellido' => 'Guerra',
                'perfil_id' => 2,
            ],
            [
                'user' => 'fabian_bros',
                'password' => Hash::make('fb1'),
                'nombre' => 'Fabian',
                'apellido' => 'Bros',
                'perfil_id' => 1,
            ],
        ]);
    }
}
