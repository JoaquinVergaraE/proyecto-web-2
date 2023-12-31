<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';
    protected $primaryKey = ['cod_grupo', 'cod_institucion']; // Claves primarias compuestas
    public $incrementing = false; // Desactiva la auto-incrementación de las claves primarias
    public $timestamps = false; // No se gestionarán automáticamente las marcas de tiempo

    protected $fillable = [
        'cod_grupo',
        'cod_institucion',
        'rut_encargado',
        'cantidad_niños',
        'cantidad_niñas',
        'cantidad_adultos',
        'cantidad_adultas',
    ];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class, 'cod_institucion', 'cod_institucion');
    }

    public function encargado()
    {
        return $this->belongsTo(Encargado::class, 'rut_encargado', 'rut_encargado');
    }
}
