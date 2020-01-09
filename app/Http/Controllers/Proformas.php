<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proforma;

use Notify;

class Proformas extends Controller
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
        $this->datos['active_page']='proformas';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proformas = Proforma::all();

        $this->datos['proformas'] = $proformas;

        return view('back.proformas.index', $this->datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.proformas.create', $this->datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Proforma($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        Notify::success("$usuario->name cread@ correctamente", $title = "Operación exitosa" , $options = []);
        return redirect()->route('proformas.index');
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
        $this->datos['usuario'] = Proforma::find($id);
        
        return view('back.proformas.edit',$this->datos);
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
        $usuario = Proforma::find($id);
        $usuario->fill($request->all());
        if($request->has('password'))
            $usuario->password = bcrypt($request->password);
        else
            unset($usuario->password);
        $usuario->save();

        Notify::success("$usuario->name actualizad@ correctamente", $title = "Operación exitosa" , $options = []);
        return redirect()->route('proformas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $usuario = Proforma::find($id);
        $usuario->delete();

        if($request->ajax())
        {
            return response()->json(['success'=>TRUE,'id'=>$id]);
        }else{
            return redirect()->route('proformas.index');
        }
    }
}
