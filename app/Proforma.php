<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proforma extends Model
{
    protected $table = "proformas";

    protected $fillable = [
    	'descuento', 'valor', 'fecha', 'cliente_id'
    ];

    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
}