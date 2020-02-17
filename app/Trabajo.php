<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $table = "trabajos";

    protected $fillable = [
    	'nombre', 'slug', 'resumen', 'fecha_inicio', 'fecha_fin', 'plazo',
    	'responsable', 'estado', 'presupuesto', 'url', 'cliente_id'
    ];

    /**
     * Un trabajo pertenece a un cliente
     * @return [App\Cliente]   Objeto de tipo Cliente
     */
    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }

    public function categorias(){
        return $this->belongsToMany('App\Categoria');
    }

    /**
     * Devuelve las imagenes de un trabajo
     * @param  [type] $query [description]
     * @return App/Imagen       Coleccion de Objetos tipo Imagen
     */
    public function scopeImagenes($query){
        return Imagen::where('tabla_referencia',$this->table)
                ->where('id_referencia',$this->id);
    }
}
