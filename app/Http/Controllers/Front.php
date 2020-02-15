<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use App\Trabajo;

class Front extends Controller
{
	/**
     * $datos Guarda las variables que se van a pasar a la vista en un solo array
     * @var array
     */
    var $datos;

    /**
     * Constructor del controlador Clientes
     * aqui colocamos lo que vayamos a utilizar en todas las vistas que utiliza este controlador
     */
    public function __construct()
    {
        //setea la variable $active_page para agregar la clase active en el menu principal
        $this->datos['active_page']='home';
    }

    public function index(Request $request){
        $this->datos['trabajos'] = Trabajo::all();
        $this->datos['clientes'] = Cliente::all();

        return view('front.home', $this->datos);
    }

    public function templates(Request $request, $opcion){
    	$this->datos['trabajos'] = Trabajo::all();
    	$this->datos['clientes'] = Cliente::all();

    	return view('front.template.'.$opcion, $this->datos);
    }

}
