<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cuenta extends Authenticatable
{
    protected $table = 'cuentas';
    protected $primaryKey = 'user';
    protected $keyType = 'string';
    protected $fillable = ['password'. 'nombre', 'apellido'];
    public $timestamps = false;

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'perfil_id');
    }

    public function imagenes()
    {
        return $this->hasMany(Imagen::class, 'cuenta_user');
    }
}