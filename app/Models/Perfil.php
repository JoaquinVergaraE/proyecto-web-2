<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
    public $timestamps = false;


    public function cuentas()
    {
        return $this->hasMany(Cuenta::class, 'perfil_id');
    }
}