@extends('back.template.base')

@section('title', 'Crear usuario')
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
	            <li><a href="{{ route('usuarios.index') }}"><i class="material-icons">person</i> Usuarios </a></li>
	            <li class="active"><i class="material-icons">add</i> Nuevo usuario</li>
	        </ol>
        </div>

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Nuevo usuario
                            <small>Información</small>
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('usuarios.store') }}" id="create-form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('name') ? ' error' : '' }}">
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" required="">
                                    <label class="form-label">Nombre del usuario</label>

                                    @if ($errors->has('name'))
                                        <label class="error">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('email') ? ' error' : '' }}">
                                    <input type="email" name="email" class="form-control"  value="{{ old('email') }}" required>
                                    <label class="form-label">Email</label>
                                    @if ($errors->has('email'))
                                        <label class="error">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>
                        

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('phone') ? ' error' : '' }}">
                                    <input type="text" name="phone" class="form-control"  value="{{ old('phone') }}" >
                                    <label class="form-label">Teléfono(s)</label>
                                    @if ($errors->has('phone'))
                                        <label class="error">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('password') ? ' error' : '' }}">
                                    <input type="password" name="password" class="form-control"  value="" required>
                                    <label class="form-label">Contraseña</label>
                                    @if ($errors->has('password'))
                                        <label class="error">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>


                            <input type="hidden" name="creator_id" value="{{ Auth::user()->id }}">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">
                                <i class="material-icons">save</i>
                                Guardar
                            </button>
                            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary m-t-15 waves-effect" title="Cancelar">
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
<script  type="text/javascript" charset="utf-8">
     $('#create-form').validate({
        rules: {
            'name': {
                required: true
            },
            'email': {
                required: true,
                email: true
            },
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