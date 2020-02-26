<?php

use Illuminate\Database\Seeder;

use App\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nombre = "Campañas Publicitarias";
        $categoria->slug = "campanas-publicitarias";
        $categoria->resumen ="<p>Siempre desde una perspectiva innovadora, desarrollamos campañas memorables donde la creatividad se ponen de manifiesto en la generación de las gráficas publicitarias, artes finales, así como desarrollo de Branded content, ilustraciones e infografías y posteriores adaptaciones para los medios con que se trabaje, haciendo que cada uno de los productos sean parte de un mismo engranje que ayudará a la consecución de sus objetivos.</p><p>Manejamos un equipo creativo que se adapta a las necesidades del cliente, involucrandonos siempre en el proceso de principio a fin.</p><p>NOS PONEMOS LA CAMISETA EN EQUIPO</p>";
        $categoria->save();        

        $categoria = new Categoria();
        $categoria->nombre = "Diseño Gráfico";
        $categoria->slug = "diseno-grafico";
        $categoria->resumen ="Identidad Corporativa / Editorial / Ilustración<p>Damos soluciones de diseño gráfico para cualquier tipo de comunicación. Tenemos una amplia experiencia en la construcción de marcas, realización de folletos, catálogos, diseño de identidad corporativa, diseño web, posters Nuestro equipo está formado por personas creativas con grandes capacidades de diseño. No importa el soporte, nosotros nos adaptamos a diseñar lo que nuestros clientes necesiten. Creamos diseños adaptados a las necesidades de nuestros clientes y sus empresas, ofreciendo productos de calidad a precios muy competitivos</p>";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Entorno 2.0";
        $categoria->slug = "entorno-2.0";
        $categoria->resumen ="<p>Desde la web más sencilla hasta la API más completa.</p> <p>Ofrecemos desde la página web mas sencilla para empresas que únicamente tienen necesidad de estar presentes en internet, web con gestor de contenidos, tiendas online hasta integraciones B2B.</p><p>No solo tenemos experiencia en el diseño y programación web, si no que también trabajamos en sistemas de gestión de empresas y aplicaciones para dispositivos móviles.</p>";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Producción Audiovisual";
        $categoria->slug = "produccion-audiovisual";
        $categoria->resumen ="Spots y vídeos/Fotografía/Locución/Cuñas de radio/Jingles/Music Advertising<p>Producimos todo tipo de contenidos audiovisuales, tenemos todos los “juguetes” y el personal para hacer realidad la idea que tienes rondando en tu cabeza.</p>";
        $categoria->save();

    }
}
