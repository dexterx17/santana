<?php

use Illuminate\Database\Seeder;

use App\Trabajo;

class TrabajosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //******************* Página web de GuaytambosTours *************
        $trabajo = new Trabajo();
        $trabajo->nombre = "Página web de GuaytambosTours";
        $trabajo->resumen = "Diseño y elaboración de la página web, que permite realizar reservas en línea en 3 sencillos pasos.";
        $trabajo->fecha_inicio = "2018-01-23";
        $trabajo->fecha_fin = "2018-02-23";
        $trabajo->responsable = "Marco Barragan";
        $trabajo->estado = "entregado";
        $trabajo->presupuesto = 650;
        $trabajo->url = "http://www.guaytambostours.com/";
        $trabajo->cliente_id = 1;
        $trabajo->save();
        //***************************************************************

        //******************* Campaña de Moroana Santiago *************
        $trabajo = new Trabajo();
        $trabajo->nombre = "Campaña de Morona Santiago";
        $trabajo->resumen = "Campaña de difusión y posicionamiento turístico";
        $trabajo->fecha_inicio = "2017-06-01";
        $trabajo->fecha_fin = "2018-01-01";
        $trabajo->responsable = "Sid Calle";
        $trabajo->estado = "entregado";
        $trabajo->presupuesto = 2500;
        $trabajo->url = "http://www.moronasantiagoessangay.com/";
        $trabajo->cliente_id = 2;
        $trabajo->save();
        //***************************************************************
    }
}
