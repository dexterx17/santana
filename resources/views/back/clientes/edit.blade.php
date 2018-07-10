@extends('back.template.base')

@section('title', 'Editar cliente')
@section('page_class','theme-red')

@section('css')
    <link href="{{ asset('plugins/chosen/chosen.css') }}" rel="stylesheet"/>
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
	            <li class="active"><i class="material-icons">add</i> Editar cliente</li>
	        </ol>
        </div>

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Editar cliente
                            <small>Información</small>
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}" id="create-form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('nombre') ? ' error' : '' }}">
                                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') ? old('nombre') : $cliente->nombre }}" class="form-control" required="">
                                    <label class="form-label">Nombre del cliente</label>

                                    @if ($errors->has('nombre'))
                                        <label class="error">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('descripcion') ? ' error' : '' }}">
                                    <textarea id="descripcion" name="descripcion" class="form-control">{{ old('descripcion') ? old('descripcion') : $cliente->descripcion }}</textarea>
                                    <label class="form-label">Descripción o contenido</label>
                                    @if ($errors->has('descripcion'))
                                        <label class="error">
                                            <strong>{{ $errors->first('descripcion') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('logo') ? ' error' : '' }}">
                                    <input type="file" name="logo" class="form-control">
                                    <label class="form-label">Logo/Icono</label>
                                    @if ($errors->has('logo'))
                                        <label class="error">
                                            <strong>{{ $errors->first('logo') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('telefono') ? ' error' : '' }}">
                                    <input type="telefono" name="telefono" class="form-control"  value="{{ old('telefono') ? old('telefono') : $cliente->telefono }}" >
                                    <label class="form-label">Teléfono(s)</label>
                                    @if ($errors->has('telefono'))
                                        <label class="error">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('contacto') ? ' error' : '' }}">
                                    <input type="contacto" name="contacto" class="form-control"  value="{{ old('contacto') ? old('contacto') : $cliente->contacto }}" >
                                    <label class="form-label">Persona de contacto</label>
                                    @if ($errors->has('contacto'))
                                        <label class="error">
                                            <strong>{{ $errors->first('contacto') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('email') ? ' error' : '' }}">
                                    <input type="email" name="email" class="form-control"  value="{{ old('email') ? old('email') : $cliente->email }}" >
                                    <label class="form-label">Email</label>
                                    @if ($errors->has('email'))
                                        <label class="error">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('web') ? ' error' : '' }}">
                                    <input type="url" name="web" class="form-control"  value="{{ old('web') ? old('web') : $cliente->web }}" >
                                    <label class="form-label">Página web</label>
                                    @if ($errors->has('web'))
                                        <label class="error">
                                            <strong>{{ $errors->first('web') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('facebook_page') ? ' error' : '' }}">
                                    <input type="url" name="facebook_page" class="form-control"  value="{{ old('facebook_page') ? old('facebook_page') : $cliente->facebook_page }}" >
                                    <label class="form-label">Página de facebook</label>
                                    @if ($errors->has('facebook_page'))
                                        <label class="error">
                                            <strong>{{ $errors->first('facebook_page') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('twitter_page') ? ' error' : '' }}">
                                    <input type="url" name="twitter_page" class="form-control"  value="{{ old('twitter_page') ? old('twitter_page') : $cliente->twitter_page }}" >
                                    <label class="form-label">Página de twitter</label>
                                    @if ($errors->has('twitter_page'))
                                        <label class="error">
                                            <strong>{{ $errors->first('twitter_page') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('instagram_page') ? ' error' : '' }}">
                                    <input type="url" name="instagram_page" class="form-control"  value="{{ old('instagram_page') ? old('instagram_page') : $cliente->instagram_page }}" >
                                    <label class="form-label">Página de instagram</label>
                                    @if ($errors->has('instagram_page'))
                                        <label class="error">
                                            <strong>{{ $errors->first('instagram_page') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('youtube_page') ? ' error' : '' }}">
                                    <input type="url" name="youtube_page" class="form-control"  value="{{ old('youtube_page') ? old('youtube_page') : $cliente->youtube_page }}" >
                                    <label class="form-label">Página de youtube</label>
                                    @if ($errors->has('youtube_page'))
                                        <label class="error">
                                            <strong>{{ $errors->first('youtube_page') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group form-float">
                                <div id="map">
                                    
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('lat') ? ' error' : '' }}">
                                    <input type="text" name="lat" class="form-control"  value="{{ old('lat') ? old('lat') : $cliente->lat }}" id="lat">
                                    <label class="form-label">Latitud</label>
                                    @if ($errors->has('lat'))
                                        <label class="error">
                                            <strong>{{ $errors->first('lat') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('lng') ? ' error' : '' }}">
                                    <input type="text" name="lng" class="form-control"  value="{{ old('lng') ? old('lng') : $cliente->lng }}" id="lng">
                                    <label class="form-label">Longitud</label>
                                    @if ($errors->has('lng'))
                                        <label class="error">
                                            <strong>{{ $errors->first('lng') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('orden') ? ' error' : '' }}">
                                    <input type="number" id="orden" name="orden" value="{{ old('orden') ? old('orden') : $cliente->orden }}" class="form-control">
                                    <label class="form-label">Orden de visualizacion</label>
                                    @if ($errors->has('orden'))
                                        <label class="error">
                                            <strong>{{ $errors->first('orden') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>
                            <input type="hidden" name="creator_id" value="{{ Auth::user()->id }}">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">
                                <i class="material-icons">save</i>
                                Guardar
                            </button>
                            <a href="{{ route('clientes.index') }}" class="btn btn-secondary m-t-15 waves-effect" title="Cancelar">
                                <i class="material-icons">cancel</i>
                                Cancelar
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>

@endsection

@section('js')
<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $('#actividades').chosen({
        placeholder_text_single:"Selecciona una o varias actividades",
        placeholder_text:"Selecciona una o varias actividades",
        width:'100%'
    });
    $('#categorias').chosen({
        placeholder_text_single:"Selecciona una o varias categorias",
        placeholder_text:"Selecciona una o varias categorias",
        width:'100%'
    });
</script>
<script  type="text/javascript" charset="utf-8">
     $('#create-form').validate({
        rules: {
            'nombre': {
                required: true
            },
            'descripcion': {
                required: true
            },
            'orden': {
                number: true
            }
        },
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });
</script>
<script tpye="text/javasript">
    var map;
    var marker = null;

    var origin = {
        lat: -1.1776428 , lng: -78.5640265
    }

    function initMap() {
        //alert('initMap');
        function onDragMarker(e) {
            //$('#tabs a[href="#ubicacion"]').tab('show');
            $('#lat').val(e.latLng.lat);
            $('#lng').val(e.latLng.lng);
        }

        function placeMarker(location) {
            if(this.marker==null){
                marker = new google.maps.Marker({
                    position: location, 
                    map: map,
                    draggable: true,
                });
                $('#lat').val(location.lat);
                $('#lng').val(location.lng);
                google.maps.event.addListener(marker,'dragend',onDragMarker);
            }
        }
  
        map = new google.maps.Map(document.getElementById('map'), {
            center: origin,
            zoom: 13
        });

        google.maps.event.addListener(map, 'click', function(event) {
               placeMarker(event.latLng);
        });

        map.addListener('zoom_changed', function() {
            //$('#tabs a[href="#ubicacion"]').tab('show');
            $('#zoom').val(map.getZoom()+1);
        });

        var clickHandler = new ClickEventHandler(map, origin);
    }
    /**
       * @constructor
       */
      var ClickEventHandler = function(map, origin) {
        this.origin = origin;
        this.map = map;
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);
        this.placesService = new google.maps.places.PlacesService(map);
        this.infowindow = new google.maps.InfoWindow;
        this.infowindowContent = document.getElementById('infowindow-content');
        this.infowindow.setContent(this.infowindowContent);

        // Listen for clicks on the map.
        //this.map.addListener('click', this.handleClick.bind(this));
      };

</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ920_mAj7Lcw2Mc6JOqrxbJEKHQS0BRE&callback=initMap&libraries=places">
</script>
@endsection