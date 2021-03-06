@extends('back.template.base')

@section('title', 'Editar cliente')
@section('page_class','theme-red')

@section('css')
    <link href="{{ asset('plugins/chosen/chosen.css') }}" rel="stylesheet"/>
    <link href="{{ asset('plugins/dropzone/min/basic.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}" rel="stylesheet"/>
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
	            <li class="active"><i class="material-icons">edit</i> Editar cliente</li>
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


        <!-- Imagenes -->
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Imágenes de {{ $cliente->nombre }}
                        </h2>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12" id="container-form-imagenes">
                                
                            </div>
                        </div>
                        <div class="row">
                            @foreach($cliente->imagenes()->get() as $imagen )
                                @include('back.template.partials.image_block', ['imagen'=>$imagen])
                            @endforeach
                        </div>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.imagenes.store',$cliente->id) }}" class="dropzone">
                        </form>
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
<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}" type="text/javascript"></script>
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


    $(document).on('click','.delete-image',function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        swal({
          title: "{!! trans('comun.estas_seguro') !!}?",
          text: "{!! trans('comun.esta_accion_no') !!}!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "{{ trans('comun.si_eliminar') }}!",
          cancelButtonText: "{{ trans('comun.no_cancelar') }}!",
          closeOnConfirm: false,
          closeOnCancel: true
        },
        function(isConfirm){
            if (isConfirm) {
                $.ajax({
                    url: url,
                    data:{'_token':'{{ csrf_token() }}'},
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
                        // Do something with the result
                        if(data.success){
                            $('#item'+data.id).fadeOut('slow');
                            swal("Eliminado!", "Eliminado correctamente", "success");
                        }else{
                            swal("Error", "Error al eliminar", "error");
                        }
                    }
                });
            }
        });
    });

    $(document).ready(function(){
        $('.dropzone').dropzone({
            'maxFilesize':1,
            'maxFiles':3,
            'paramName':'imagen',
            'acceptedFiles':'image/*',
            sending:function(file, xhr, formData){
                formData.append("_token", '{{ Session::token() }}');
                formData.append("referencia", 'clientes');
            }
        });
    });

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
        lat: -2.2749909608065475 , lng: -78.21441650390625
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

        if(('{{ $cliente->lat }}' != '')  && ('{{ $cliente->lng }}' != '')){
            origin = {lat: parseFloat('{{ $cliente->lat }}'), lng: parseFloat('{{ $cliente->lng }}')};
            
            map = new google.maps.Map(document.getElementById('map'), {
                center: origin,
                zoom: 16
            });
            marker = new google.maps.Marker({
                position: origin,
                map: map,
                draggable: true,
            });

            google.maps.event.addListener(marker,'dragend',onDragMarker);
        }else{
            map = new google.maps.Map(document.getElementById('map'), {
                center: origin,
                zoom: 6
            });
        }

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
        this.map.addListener('click', this.handleClick.bind(this));
      };

      ClickEventHandler.prototype.handleClick = function(event) {
        console.log('You clicked on: ' + event.latLng);
        // If the event has a placeId, use it.
        if (event.placeId) {
          console.log('You clicked on place:' + event.placeId);
          $('#google_id').val(event.placeId);

          // Calling e.stop() on the event prevents the default info window from
          // showing.
          // If you call stop here when there is no placeId you will prevent some
          // other map click event handlers from receiving the event.
          event.stop();
          //this.calculateAndDisplayRoute(event.placeId);
          this.getPlaceInformation(event.placeId);
        }
      };

      ClickEventHandler.prototype.calculateAndDisplayRoute = function(placeId) {
        var me = this;
        this.directionsService.route({
          origin: this.origin,
          destination: {placeId: placeId},
          travelMode: 'WALKING'
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };

      ClickEventHandler.prototype.getPlaceInformation = function(placeId) {
        var me = this;
        this.placesService.getDetails({placeId: placeId}, function(place, status) {
          if (status === 'OK') {
            marker.setPosition(place.geometry.location);
            console.log(place);
            if($('#nombre').val()===""){
                $('#nombre').val(place.name);
            }
            if($('#direccion').val()==="" && place.formatted_address){
                $('#direccion').val(place.formatted_address);
            }
            if($('#web').val()==="" && place.website){
                $('#web').val(place.website);
            }
            if($('#telefono').val()==="" && place.formatted_phone_number){
                $('#telefono').val(place.formatted_phone_number);
            }
            /*me.infowindow.close();
            me.infowindow.setPosition(place.geometry.location);
            me.infowindowContent.children['place-icon'].src = place.icon;
            me.infowindowContent.children['place-name'].textContent = place.name;
            me.infowindowContent.children['place-id'].textContent = place.place_id;
            me.infowindowContent.children['place-address'].textContent = place.formatted_address;
            me.infowindow.open(me.map);*/
          }
        });
      };

</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ920_mAj7Lcw2Mc6JOqrxbJEKHQS0BRE&callback=initMap&libraries=places">
</script>
@endsection