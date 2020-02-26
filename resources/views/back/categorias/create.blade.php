@extends('back.template.base')

@section('title', 'Crear categoria')
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
	            <li><a href="{{ route('categorias.index') }}"><i class="material-icons">person</i> Usuarios </a></li>
	            <li class="active"><i class="material-icons">add</i> Nuevo categoria</li>
	        </ol>
        </div>

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Nuevo categoria
                            <small>Información</small>
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('categorias.store') }}" id="create-form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('nombre') ? ' error' : '' }}">
                                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="form-control" required="">
                                    <label class="form-label">Nombre del categoria</label>

                                    @if ($errors->has('nombre'))
                                        <label class="error">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('slug') ? ' error' : '' }}">
                                    <input type="slug" name="slug" class="form-control"  value="{{ old('slug') }}" disabled>
                                    <label class="form-label">Slug</label>
                                    @if ($errors->has('slug'))
                                        <label class="error">
                                            <strong>{{ $errors->first('slug') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>
                        

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('resumen') ? ' error' : '' }}">
                                    <input type="text" name="resumen" class="form-control"  value="{{ old('resumen') }}" >
                                    <label class="form-label">Resumen</label>
                                    @if ($errors->has('resumen'))
                                        <label class="error">
                                            <strong>{{ $errors->first('resumen') }}</strong>
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <input type="hidden" name="creator_id" value="{{ Auth::user()->id }}">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">
                                <i class="material-icons">save</i>
                                Guardar
                            </button>
                            <a href="{{ route('categorias.index') }}" class="btn btn-secondary m-t-15 waves-effect" title="Cancelar">
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

     $('#nombre').on('keyup',function(){
        var valor = $(this).val();
        $('#slug').val(string_to_slug(valor,'-'));
     });
     
     $('#create-form').validate({
        rules: {
            'nombre': {
                required: true
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