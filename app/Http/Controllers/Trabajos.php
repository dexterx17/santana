<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trabajo;
use App\Cliente;

use Notify;

class Trabajos extends Controller
{

    /**
     * $datos Guarda las variables que se van a pasar a la vista en un solo array
     * @var array
     */
    var $datos;

    /**
     * Constructor del controlador Trabajos
     * aqui colocamos lo que vayamos a utilizar en todas las vistas que utiliza este controlador
     */
    public function __construct()
    {
        //setea la variable $active_page para agregar la clase active en el menu principal
        $this->datos['active_page'] = 'trabajos';
        $this->datos['dias'] = $this->_getDias();
        $this->datos['estados'] = ['propuesta'=>'Propuesta','ejecucion'=>'Ejecución','entregado'=>'Entregado','cancelado'=>'Cancelado'];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->datos['trabajos'] = Trabajo::all();

        return view('back.trabajos.index', $this->datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->datos['select_clientes']=Cliente::orderBy('nombre','ASC')->get()->pluck('nombre','id');
        return view('back.trabajos.create', $this->datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajo = new Trabajo($request->all());
        $trabajo->slug = str_slug($trabajo->nombre);

        $trabajo->save();

        Notify::success("$trabajo->nombre cread@ correctamente", $title = "Operación exitosa" , $options = []);
        return redirect()->route('trabajos.index');
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
        $this->datos['trabajo'] = Trabajo::find($id);
        $this->datos['select_clientes']=Cliente::orderBy('nombre','ASC')->get()->pluck('nombre','id');
        
        return view('back.trabajos.edit',$this->datos);
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
        $trabajo = Trabajo::find($id);
        $trabajo->fill($request->all());
        $trabajo->slug = str_slug($trabajo->nombre);

        $trabajo->save();
        Notify::success("$trabajo->nombre actualizad@ correctamente", $title = "Operación exitosa" , $options = []);
        return redirect()->route('trabajos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $trabajo = Trabajo::find($id);
        
        $trabajo->delete();
        if($request->ajax())
        {
            return response()->json(['success'=>TRUE,'id'=>$id]);
        }else{
            return redirect()->route('trabajos.index');
        }
    }

    private function _getDias(){
        $dias = [];
        for($i=10;$i<=120;$i+=10){
            if($i==1){
                $dias[$i]= $i." día";
            }else{
                $dias[$i]= $i." dias";
            }
        }

        return $dias;
    }
}
