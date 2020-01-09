<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = [
    	'nombre', 'description', 'ruc', 'email','telefono','direccion','web','contacto','orden','lat','lng',
        'ciudad', 'facebook_page', 'twitter_page', 'instagram_page', 'youtube_page', 'slug'
    ];

    /**
     * Una cliente tiene varios trabajos
     * @return [App\Trabajo]   Array de objetos tipo Trabajo
     */
    public function trabajos(){
    	return $this->hasMany('App\Trabajo');
    }

    /**
     * Una cliente tiene varias proformas
     * @return [App\Trabajo]   Array de objetos tipo Trabajo
     */
    public function proformas(){
        return $this->hasMany('App\Proforma');
    }

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
