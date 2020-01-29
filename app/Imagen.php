<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = "imagenes";

    protected $fillable = [
    	'ruta', 'ruta_265x265','ruta_360x240','ruta_530x530','ruta_650x1070',
        'ruta_1024x640','1300x2140', 'nombre','autor','creditos',
    	'tabla_referencia','id_referencia','destacada', 'tresd'
    ];

    /**
     * Devuelve la instancia del Modulo a la que pertenece la imagen
     * @param  [type] $query [description]
     * @return [type]        [description]
     */
    public function scopeReferencia($query){
    	
    	switch ($this->tabla_referencia) {
    		case 'users':
    			$user = User::find($this->id_referencia);
                return $user;
    			break;           
            case 'clientes':
                $cliente = Cliente::find($this->id_referencia);
                return $cliente;
                break;
    		case 'trabajos':
    			$trabajo = Trabajo::find($this->id_referencia);
                return $trabajo;
    			break;    		
    	}
    }
}
