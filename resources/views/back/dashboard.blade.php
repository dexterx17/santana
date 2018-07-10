@extends('back.template.base')

@section('page_class','theme-red')

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
            <h2>Dashboard</h2>
            
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <a href="{{ route('clientes.index') }}" title="CLIENTES" class="icon">
                            <i class="material-icons">person</i>
                        </a>
                        <div class="content">
                            <div class="text">CLIENTES</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <a href="{{ route('trabajos.index') }}" title="TRABAJOS" class="icon">
                            <i class="material-icons">class</i>
                        </a>
                        <div class="content">
                            <div class="text">TRABAJOS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- #END# Widgets -->

        </div>
    </div>
</section>

@endsection
