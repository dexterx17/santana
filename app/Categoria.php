<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable = [
    	'nombre', 'slug', 'resumen'
    ];

    public function trabajos(){
    	return $this->belongsTo('App\Trabajo');
    }
}
