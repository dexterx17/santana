@extends('back.template.base')

@section('title', 'Clientes')
@section('page_class','theme-red')

@section('css')

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
	            <li class="active"><i class="material-icons">person</i> Clientes</li>
	        </ol>
        </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listado de clientes
                                <a href="{{ route('clientes.create') }}" class="btn btn-success waves-effect">
                                    <i class="material-icons">add</i>
                                    <span>Crear</span>
                                </a>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Teléfono</th>
                                            <th>Contacto</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Teléfono</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($clientes as $cliente)
                                        <tr id="item{{ $cliente->id }}">
                                            <td>{{ $cliente->nombre }}</td>
                                            <td>{{ $cliente->email }}</td>
                                            <td>{{ $cliente->telefono }}</td>
                                            <td>{{ $cliente->contacto }}</td>
                                            <td>
                                                <a href="{{ route('clientes.show',$cliente->id) }}" class="btn btn-success waves-effect" title="Ver perfil">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <a href="{{ route('clientes.edit',$cliente->id) }}" class="btn btn-primary waves-effect" title="Editar">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{ route('clientes.destroy',$cliente->id) }}" class="btn btn-danger waves-effect btn-delete-item" title="Eliminar">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

    </div>
</section>

@endsection

@section('js')

<!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>

    <script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
    <script>
        $(document).on('click','.btn-delete-item',function(e){
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
    </script>
@endsection