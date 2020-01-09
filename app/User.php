<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Devuelve las imagenes de un cliente
     * @param  [type] $query [description]
     * @return App/Imagen       Coleccion de Objetos tipo Imagen
     */
    public function scopeImagenes($query){
        return Imagen::where('tabla_referencia',$this->table)
                ->where('id_referencia',$this->id);
    }
}
