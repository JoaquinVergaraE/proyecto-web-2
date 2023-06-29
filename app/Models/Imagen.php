<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'archivo', 'baneada', 'motivo_ban'];
    public $timestamps = false;

    public function cuenta()
    {
        return $this->belongsTo(Cuenta::class, 'cuenta_user');
    }
}