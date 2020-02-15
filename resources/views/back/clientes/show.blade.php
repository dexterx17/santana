@extends('back.template.base')

@section('title', 'Editar cliente')
@section('page_class','theme-red')

@section('css')
    <link href="{{ asset('plugins/chosen/chosen.css') }}" rel="stylesheet"/>
    <link href="{{ asset('plugins/dropzone/min/basic.min.css') }}" rel="stylesheet"/>

        <!-- Light Gallery Plugin Css -->
    <link href="{{ asset('plugins/light-gallery/css/lightgallery.css') }}" rel="stylesheet">

    <style type="text/css" media="screen">
        #map{
            width: 100%;
            height: 200px;
        }
    </style>
@endsection

@section('content')

@include('back.template.partials.page_loader')
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
@include('back.template.partials.search_bar')
@include('back.template.partials.navbar')

<section>
    @include('back.template.partials.left_sidebar')
    @include('back.template.partials.right_sidebar')
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
	        <ol class="breadcrumb breadcrumb-col-teal">
                <li><a href="{{ route('admin') }}"><i class="material-icons">home</i> Inicio</a></li>
	            <li><a href="{{ route('clientes.index') }}"><i class="material-icons">map</i> Clientes </a></li>
	            <li class="active"><i class="material-icons">edit</i> Info cliente</li>
	        </ol>
        </div>

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <img src="{{ asset('img/logos/'.$cliente->logo) }}" alt="" class="pull-right">
                            {{ $cliente->nombre }}
                            <a href="{{ route('clientes.edit',$cliente->id) }}" class="btn btn-success waves-effect ">
                                <i class="material-icons">edit</i>
                            </a>
                            <small>Información</small>
                        </h2>
                    </div>
                    <div class="body">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                @foreach($cliente->imagenes()->get() as $imagen )
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"  id="item{{ $imagen->id }}">
                                    <a href="{{ asset('img/uploads/'.$imagen->ruta) }}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{ asset('img/uploads/'.$imagen->ruta) }}">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->


        <!-- Trabajos -->
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Trabajos de {{ $cliente->nombre }}
                            <a href="{{ route('trabajos.create') }}" class="btn btn-success waves-effect">
                                <i class="material-icons">add</i>
                                <span>Nuevo trabajo</span>
                            </a>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            @foreach($cliente->trabajos()->get() as $trabajo )
                                @include('back.trabajos.slide', ['trabajo'=>$trabajo])
                            @endforeach
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </div><!--/row-->

        <!-- Proformas -->
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Proformas de {{ $cliente->nombre }}
                            <a href="{{ route('trabajos.create') }}" class="btn btn-success waves-effect">
                                <i class="material-icons">add</i>
                                <span>Nueva proforma</span>
                            </a>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fecha</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </div><!--/row-->
        <!-- #END# Imagenes -->
    </div>
</section>

@endsection

@section('js')
   <!-- Light Gallery Plugin Js -->
    <script src="{{ asset('plugins/light-gallery/js/lightgallery-all.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/pages/medias/image-gallery.js') }}"></script>
@endsection