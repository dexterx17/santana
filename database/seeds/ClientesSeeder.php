<?php

use Illuminate\Database\Seeder;

use App\Cliente;

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
        $cliente->email = "guaytambostours@hotmail.com";
        $cliente->telefono = "098 424 4721";
        $cliente->direccion = "El Condor y 10 de Agosto";
        $cliente->ciudad = "Ambato";
        $cliente->web = "http://www.guaytambostours.com/";
        $cliente->contacto = "Paola Barragan";
        $cliente->save();
        //*******************************************************

        //******************** Prefectura de Morona Santiago *****************
        $cliente = new Cliente();
        $cliente->nombre = "Prefectura de Morona Santiago";
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
        //$cliente->ruc = "";
        $cliente->email = "gobierno.provincial@tungurahua.gob.ec";
        $cliente->telefono = "033730220";
        $cliente->direccion = "Calles Simón Bolivar y Mariano Castillo";
        $cliente->ciudad = "Ambato";
        $cliente->web = "https://tungurahua.gob.ec";
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
