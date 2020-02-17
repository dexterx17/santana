<?php

use Illuminate\Database\Seeder;

use App\Cliente;
use App\Imagen;

use \Image;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//******************** GuaytambosTours *****************
        $cliente = new Cliente();
        $cliente->nombre = "GuaytambosTours";
        //$cliente->ruc = "";
        $cliente->descripcion = "Transporte ejecutivo puerta a puerta";
        $cliente->email = "guaytambostours@hotmail.com";
        $cliente->telefono = "098 424 4721";
        $cliente->direccion = "El Condor y 10 de Agosto";
        $cliente->ciudad = "Ambato";
        $cliente->web = "http://www.guaytambostours.com/";
        $cliente->contacto = "Paola Barragan";
        $cliente->save();
        //*******************************************************

        $imagen = new Imagen();
        $imagen->nombre = "";
        $imagen->ruta = "";

        $imagen->tabla_referencia = "";
        $imagen->id_referencia = $cliente->id;
        $imagen->save();


        //******************** Prefectura de Morona Santiago *****************
        $cliente = new Cliente();
        $cliente->nombre = "Prefectura de Morona Santiago";
        $cliente->descripcion = "Entidad pública";
        //$cliente->ruc = "";
        $cliente->email = "comunicacion@moronasantiago.gob.ec";
        $cliente->telefono = "072700116";
        $cliente->direccion = "24 de Mayo y Bolívar (Esquina).";
        $cliente->ciudad = "Macas";
        $cliente->web = "https://moronasantiago.gob.ec";
        $cliente->contacto = "Sid Calle";
        $cliente->save();
        //*******************************************************
        
        //******************** HGPT *****************
        $cliente = new Cliente();
        $cliente->nombre = "Honorable Gobierno Provincial de Tungurahua";
        $cliente->descripcion = "Entidad pública";
        //$cliente->ruc = "";
        $cliente->email = "gobierno.provincial@tungurahua.gob.ec";
        $cliente->telefono = "033730220";
        $cliente->direccion = "Calles Simón Bolivar y Mariano Castillo";
        $cliente->ciudad = "Ambato";
        $cliente->web = "https://tungurahua.gob.ec";
        $cliente->contacto = "";
        $cliente->save();
        //******************************************************* 

        //******************** HGPT *****************
        $cliente = new Cliente();
        $cliente->nombre = "HOSPITAL MUNICIPAL NUESTRA SEÑORA DE LA MERCED";
        $cliente->descripcion = "Entidad pública";
        //$cliente->ruc = "";
        $cliente->email = "gobierno.provincial@tungurahua.gob.ec";
        $cliente->telefono = "032849047";
        $cliente->direccion = "Isidro Viteri y Gertudiz Esparza sector Letamendi";
        $cliente->ciudad = "Ambato";
        $cliente->facebook_page = "https://www.facebook.com/Hospital-Municipal-Nuestra-Se%C3%B1ora-de-la-Merced-307790882565657/";
        $cliente->web = "http://www.hmunicipal.gob.ec/";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************

        //******************** SNAP *****************
        $cliente = new Cliente();
        $cliente->nombre = "SNAP";
        $cliente->descripcion = "Veterinaria";
        //$cliente->ruc = "";
        $cliente->email = "admin@snap.ec";
        $cliente->telefono = "02845449";
        $cliente->direccion = "Av. Jacome Clavijo Y Marcos Montalvo";
        $cliente->ciudad = "Ambato";
        $cliente->facebook_page = "https://www.facebook.com/SNAP.Ambato/";
        $cliente->web = "http://www.snap.ec/";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************

        //******************** GADMA *****************
        $cliente = new Cliente();
        $cliente->nombre = "GAD MUNICIPALIDAD DE AMBATO";
        $cliente->descripcion = "Entidad pública";
        //$cliente->ruc = "";
        $cliente->email = "gadma@ambato.gob.ec";
        $cliente->telefono = "032997800";
        $cliente->direccion = "Avenida Atahualpa y Río Cutuchi";
        $cliente->ciudad = "Ambato";
        $cliente->facebook_page = "https://www.facebook.com/MunicipioAmbato/";
        $cliente->web = "https://ambato.gob.ec/";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************

        //******************** Gallo pinto *****************
        $cliente = new Cliente();
        $cliente->nombre = "Gallo Pinto";
        //$cliente->ruc = "";
        $cliente->email = "gallinasdePinllo@live.com";
        $cliente->telefono = "099 560 6835";
        $cliente->direccion = "Av. Amazonas Km 4 via baños-puyo";
        $cliente->ciudad = "Baños";
        $cliente->facebook_page = "https://www.facebook.com/gallinasdePinllo.galloPinto/";
        $cliente->web = "#";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************

        //******************** eeasa *****************
        $cliente = new Cliente();
        $cliente->nombre = "EMPRESA ELÉCTRICA AMBATO REGIONAL CENTRO NORTE";
        $cliente->descripcion = "Entidad pública";
        //$cliente->ruc = "";
        //$cliente->email = "gallinasdePinllo@live.com";
        $cliente->telefono = "03 299 8600";
        $cliente->direccion = "Av. 12 de Noviembre 11-29 y Espejo";
        $cliente->ciudad = "Ambato";
        $cliente->facebook_page = "https://www.facebook.com/EmpresaElectricaAmbato/";
        $cliente->web = "http://www.eeasa.com.ec";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************

        //******************** tisaleo *****************
        $cliente = new Cliente();
        $cliente->nombre = "GAD Tisaleo";
        $cliente->descripcion = "Entidad pública";
        //$cliente->ruc = "";
        $cliente->email = "informacion@tisaleo.gob.ec";
        $cliente->telefono = "032751200";
        $cliente->direccion = "17 de Noviembre y Cacique Tisaleo";
        $cliente->ciudad = "Tisaleo";
        $cliente->facebook_page = "https://www.facebook.com/Tisaleo-Turismo-1043149549070768/";
        $cliente->web = "https://www.tisaleo.gob.ec/";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************

        //******************** pillaro *****************
        $cliente = new Cliente();
        $cliente->nombre = "GAD Píllaro";
        $cliente->descripcion = "Entidad pública";
        //$cliente->ruc = "";
        $cliente->email = "mpillaro@hotmail.com";
        $cliente->telefono = "033700470";
        $cliente->direccion = "Rocafuerte RF044 y Bolívar";
        $cliente->ciudad = "Píllaro";
        $cliente->facebook_page = "https://www.facebook.com/gadmpillaro/";
        $cliente->web = "http://www.pillaro.gob.ec/";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************

        //******************** comite permanete *****************
        $cliente = new Cliente();
        $cliente->nombre = "Comite permanente";
        $cliente->descripcion = "Entidad pública";
        //$cliente->ruc = "";
        $cliente->email = "secretaria@fiestasdeambato.com";
        $cliente->telefono = "03 2466314";
        $cliente->direccion = "Calle Piísima y Raymundo Salazar Sector Pinllo - Ambato ";
        $cliente->ciudad = "Ambato";
        $cliente->facebook_page = "https://www.facebook.com/FiestasdeAmbatoFFF/";
        $cliente->web = "http://www.fiestasdeambato.com/";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************
    
        //******************** comite permanete *****************
        $cliente = new Cliente();
        $cliente->nombre = "Sophie Lingerie Shop";
        $cliente->descripcion = "Tienda de ropa";
        //$cliente->ruc = "";
        $cliente->email = "sophielingerieshop@gmail.com";
        $cliente->telefono = "099 393 5706";
        $cliente->direccion = "Cevallos y Castillo";
        $cliente->ciudad = "Ambato";
        $cliente->facebook_page = "https://www.facebook.com/SophieShop593/?ref=br_rs";
        $cliente->web = "#";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************
    
        /******************** HGPT *****************
        $cliente = new Cliente();
        $cliente->nombre = "Honorable Gobierno Provincial de Tungurahua";
        //$cliente->ruc = "";
        $cliente->email = "";
        $cliente->telefono = "072700116";
        $cliente->direccion = "Castillo y Bolívar (Esquina).";
        $cliente->ciudad = "Ambato";
        $cliente->web = "https://tungurahua.gob.ec";
        $cliente->contacto = "";
        $cliente->save();
        //*******************************************************/
        


    }
}
