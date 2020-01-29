 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>{{ $trabajo->nombre }}</h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="{{ route('trabajos.show',$trabajo->id) }}" class="btn btn-success waves-effect" title="Ver perfil">
                                <i class="material-icons">remove_red_eye</i> Ver trabajo
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('trabajos.edit',$trabajo->id) }}" class="btn btn-primary waves-effect" title="Editar">
                                <i class="material-icons">edit</i> Editar trabajo
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('trabajos.destroy',$trabajo->id) }}" class="btn btn-danger waves-effect btn-delete-item" title="Eliminar">
                                <i class="material-icons">delete</i> Eliminar trabajo
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($trabajo->imagenes()->get() as $index => $imagen )
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $index }}" class="@if($index==0)active @endif"></li>
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($trabajo->imagenes()->get() as $index => $imagen )
                        <div class="item @if($index==0) active @endif">
                            <img src="{{ asset('img/uploads/'.$imagen->ruta) }}" />
                        </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>