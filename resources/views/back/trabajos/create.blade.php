@extends('back.template.base')

@section('title', 'Crear trabajo')
@section('page_class','theme-red')

@section('css')
    <link href="{{ asset('plugins/chosen/chosen.css') }}" rel="stylesheet"/>
    <style type="text/css" media="screen">
        #map{
            width: 100%;
            height: 200px;
        }
    </style>
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
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
	            <li><a href="{{ route('trabajos.index') }}"><i class="material-icons">class</i> Trabajos </a></li>
	            <li class="active"><i class="material-icons">add</i> Nuevo trabajo</li>
	        </ol>
        </div>

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Nuevo trabajo
                            <small>Información</small>
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('trabajos.store') }}" id="create-form" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('cliente_id') ? ' error' : '' }}">
                                    {!! Form::select('cliente_id',$select_clientes,'',['aria-describedby'=>'cliente_idHelp','class'=>'form-control','id'=>'cliente_id']) !!}
                                    <label class="form-label">Cliente</label>
                                    @if ($errors->has('cliente_id'))
                                        <label class="error">
                                            <strong>{{ $errors->first('cliente_id') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('nombre') ? ' error' : '' }}">
                                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="form-control" required="">
                                    <label class="form-label">Nombre del trabajo o proyecto</label>

                                    @if ($errors->has('nombre'))
                                        <label class="error">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('resumen') ? ' error' : '' }}">
                                    <textarea id="resumen" name="resumen" class="form-control">{{ old('resumen') }}</textarea>
                                    <label class="form-label">Resumen o descripción</label>
                                    @if ($errors->has('resumen'))
                                        <label class="error">
                                            <strong>{{ $errors->first('resumen') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('presupuesto') ? ' error' : '' }}">
                                    <input type="number" name="presupuesto" class="form-control"  value="{{ old('presupuesto') }}" >
                                    <label class="form-label">Presupuesto</label>
                                    @if ($errors->has('presupuesto'))
                                        <label class="error">
                                            <strong>{{ $errors->first('presupuesto') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('estado') ? ' error' : '' }}">
                                    {!! Form::select('estado',$estados,'',['aria-describedby'=>'estadoHelp','class'=>'form-control','id'=>'estado']) !!}
                                    <label class="form-label">Estado</label>
                                    @if ($errors->has('estado'))
                                        <label class="error">
                                            <strong>{{ $errors->first('estado') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('fecha_inicio') ? ' error' : '' }}">
                                    <input type="text" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio') }}" class="form-control">
                                    <label class="form-label">Fecha</label>
                                    @if ($errors->has('fecha_inicio'))
                                        <label class="error">
                                            <strong>{{ $errors->first('fecha_inicio') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('plazo') ? ' error' : '' }}">
                                    {!! Form::select('plazo',$dias,old('plazo'),['class'=>'form-control','id'=>'plazo']) !!}
                                    <label class="form-label">Duracion</label>
                                    @if ($errors->has('plazo'))
                                        <label class="error">
                                            <strong>{{ $errors->first('plazo') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('responsable') ? ' error' : '' }}">
                                    <input type="text" name="responsable" class="form-control"  value="{{ old('responsable') }}" >
                                    <label class="form-label">Persona encargada</label>
                                    @if ($errors->has('responsable'))
                                        <label class="error">
                                            <strong>{{ $errors->first('responsable') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('web') ? ' error' : '' }}">
                                    <input type="url" name="web" class="form-control"  value="{{ old('web') }}" >
                                    <label class="form-label">Página web</label>
                                    @if ($errors->has('web'))
                                        <label class="error">
                                            <strong>{{ $errors->first('web') }}</strong>
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
                                    <input type="text" name="lat" class="form-control"  value="{{ old('lat') }}" id="lat">
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
                                    <input type="text" name="lng" class="form-control"  value="{{ old('lng') }}" id="lng">
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
                                    <input type="number" id="orden" name="orden" value="{{ old('orden') ? old('orden') : 0}}" class="form-control">
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
                            <a href="{{ route('trabajos.index') }}" class="btn btn-secondary m-t-15 waves-effect" title="Cancelar">
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
<!-- Moment Plugin Js -->
    <script src="{{ asset('plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>


<script  type="text/javascript" charset="utf-8">
     $('#create-form').validate({
        rules: {
            'nombre': {
                required: true
            },
            'resumen': {
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
    $(function () {
        $('#fecha_inicio').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD',
            clearButton: true,
            weekStart: 1,
            time: false
        });
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