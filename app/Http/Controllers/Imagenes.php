<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Imagen;

use \File;
use \Image;
use \Response;


class Imagenes extends Controller
{
         /**
     * $datos Guarda las variables que se van a pasar a la vista en un solo array
     * @var array
     */
    var $datos;

    /**
     * Constructor del controlador Front
     * aqui colocamos lo que vayamos a utilizar en todas las vistas que utiliza este controlador
     */
    public function __construct()
    {
        //setea la variable $page para agregar la clase active en el menu principal
        $this->datos['page']='imagenes';
    }

    /**
     * Devuelve los imagenes actualizados despues de la fecha especificada
     * @param  string $last_date Ultima fecha sincronizado (YYYY-mm-dd hh:ii:ss)
     * @return [type]            [description]
     */
    public function updated($last_date){
        $imagenes_actualizados = Imagen::where('updated_at','>',$last_date)->get();
        return $this->collection($imagenes_actualizados, new ImagenesTransformer);
    }

    public function add(Request $request,$referencia_id){
        if($request->file('imagen'))
        {
            $imagen = new Imagen();
            $file = $request->file('imagen');
            $name = $request->referencia."_".microtime().'.'.$file->getClientOriginalExtension();
            $name=str_replace(" ","_",$name);
            $path = public_path().'/img/uploads/';
            $file->move($path,$name);
            //$imagen->nombre=$file->name;
            $imagen->ruta=$name;
            $imagen->id_referencia = $referencia_id;
            $imagen->tabla_referencia = $request->referencia;
            $imagen->save();
            if($request->ajax())
            {
                return response()->json(["success"=>TRUE]);
            }else{
                return redirect()->route(URL::previuos());
            }
        }
    }

    /**
     * Muestra el formulario para editar un elemento
     */
    public function edit($id){
        $this->datos['imagen'] = Imagen::find($id);
        return view('back.imagenes.edit',$this->datos);
    }

    /**
     * Toma los datos del formulario de actualizacion para enviarlos a la base de datos
     */
    public function update(Request $request, $id){
        $imagen = Imagen::find($id);
        $imagen->fill($request->all());
        if($request->has('destacado'))
            $imagen->destacada = true;
        else
            $imagen->destacada = false;
        $imagen->save();
        //flash("$imagen->nombre actualizado correctamente",'success');
        return redirect()->back();
    }

    /**
     * Toma la nueva imagen del formulario y la actualiza
     * @param  Request $request [description]
     * @param  integer  $id      Clave primaria del usuario
     * @return [type]           [description]
     */
    public function load(Request $request, $id){
        if($request->data)
        {
            $imagen = new Imagen();
            $path = public_path().'/img/uploads/';

            //obtengo nombre de la imagen
            $file = $request->name;
            //genero nombre unico para la imagen agregando la fecha
            $name = 'usu_'.time().'.'.$file;
            //creo un archivo temporal vacio con el nuevo nombre en la carpeta que iene permisos de escritura
            $ifp = fopen($path.$name, "wb"); 
            //separo la cadena data por la coma
            $data = explode(',', $request->data);
            //escribo en el nuevo archivo el contenido despues de la coma
            //docodificando el base64
            fwrite($ifp, base64_decode($data[1])); 
            //cierro el archivo
            fclose($ifp); 
            $imagen->ruta=$name;
            $imagen->id_referencia = $referencia_id;
            $imagen->tabla_referencia = $request->referencia;
            $imagen->save();
        }
        if($request->ajax())
        {
            return response()->json(["success"=>TRUE]);
        }else{
            return redirect()->route(URL::previuos());
        }
    }

    /**
     * Elimina un elemento de la base de datos
     */
    public function destroy($id, Request $request){
    	try{
	        $imagen = Imagen::find($id);
	        $imagen->delete();
	        File::delete(public_path().'/img/uploads/'.$imagen->ruta);
        	return response()->json(['success'=>TRUE,'id'=>$id]);
    	}catch(\Exception $er){
        	return response()->json(['success'=>FALSE,'msg'=>$er->message()]);
    	}
    }

    public function imagen($ruta, Request $request){
        $im = Imagen::where('ruta','=',$ruta)->first();


        if($request->has('w') && $request->has('h')){
            $width = $request->w;
            $height = $request->h;
            //dd($im);
            $img = Image::make(asset('img/uploads/'.$im->ruta))->resize($width, $height);

           // $logo = Image::make(asset('img/icon.png'))->resize($request->w/12, $request->h/12);
           // $img->insert($logo, 'bottom-right', 0, 0);

            return $img->response('jpg');
        }else{
            $img = Image::make(asset('img/uploads/'.$im->ruta));
            
            /*$logo = Image::make(asset('img/icon.png'))->resize(30, 30);
            $img->insert($logo, 'bottom-right', 0, 0);
            
            $img->text('SANTANA estudio', $img->width()-40, $img->height()-12, function($font) {
                //$font->file(asset('fonts/foobar.ttf'));
                $font->file(4);
                $font->size(12);
                $font->angle(90);
                $font->color('#ffffff');
                $font->align('right');
                $font->valign('bottom');
            });
            */


            $response = Response::make($img->encode('png'));
            // set content-type
            $response->header('Content-Type', 'image/png');
            return $response;
            
        }
        
    }
}
