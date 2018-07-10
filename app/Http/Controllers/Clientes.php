<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

use Notify;

class Clientes extends Controller
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
        $this->datos['active_page']='clientes';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();

        $this->datos['clientes'] = $clientes;

        return view('back.clientes.index', $this->datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.clientes.create', $this->datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente($request->all());
        $cliente->slug = str_slug($cliente->nombre);
        if($request->file('logo'))
        {
            $file = $request->file('logo');
            $name = 'logo_'.time().'.'.$file->getClientOriginalExtension();
            
            $path = public_path().'/img/logos/';
            $file->move($path,$name);
            $cliente->logo=$name;
        }

        $cliente->save();

        Notify::success("$cliente->nombre cread@ correctamente", $title = "Operación exitosa" , $options = []);
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->datos['cliente'] = Cliente::find($id);
        
        return view('back.clientes.edit',$this->datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->fill($request->all());
        $cliente->slug = str_slug($cliente->nombre);

        
        if($request->file('logo'))
        {
            $file = $request->file('logo');
            $name = 'logo_'.time().'.'.$file->getClientOriginalExtension();
            
            $path = public_path().'/img/logos/';
            $file->move($path,$name);
            $cliente->logo=$name;
        }

        $cliente->save();
        Notify::success("$cliente->nombre actualizad@ correctamente", $title = "Operación exitosa" , $options = []);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
