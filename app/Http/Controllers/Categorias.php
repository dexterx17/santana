<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;


class Categorias extends Controller
{
    
	/**
     * $datos Guarda las variables que se van a pasar a la vista en un solo array
     * @var array
     */
    var $datos;

    /**
     * Constructor del controlador Categorias
     * aqui colocamos lo que vayamos a utilizar en todas las vistas que utiliza este controlador
     */
    public function __construct()
    {
        //setea la variable $active_page para agregar la clase active en el menu principal
        $this->datos['active_page']='categorias';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();

        $this->datos['categorias'] = $categorias;

        return view('back.categorias.index', $this->datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.categorias.create', $this->datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria($request->all());
        $categoria->slug = str_slug($categoria->nombre);
        $categoria->save();

        Notify::success("$categoria->nombre cread@ correctamente", $title = "Operación exitosa" , $options = []);
        return redirect()->route('categorias.show',$categoria->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->datos['categoria'] = Categoria::find($id);
        
        return view('back.categorias.show',$this->datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->datos['categoria'] = Categoria::find($id);
        
        return view('back.categorias.edit',$this->datos);
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
        $categoria = Categoria::find($id);
        $categoria->fill($request->all());
        $categoria->slug = str_slug($categoria->nombre);

        $categoria->save();
        Notify::success("$categoria->nombre actualizad@ correctamente", $title = "Operación exitosa" , $options = []);
        return redirect()->route('categorias.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $categoria = Categoria::find($id);
        
        $categoria->delete();
        if($request->ajax())
        {
            return response()->json(['success'=>TRUE,'id'=>$id]);
        }else{
            return redirect()->route('categorias.index');
        }
    }
}
