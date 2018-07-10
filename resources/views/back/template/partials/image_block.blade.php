<div class="col-xs-6 col-md-3" id="item{{ $imagen->id }}">
    <div class="thumbnail">
        <img src='{{ asset("img/uploads/$imagen->ruta") }}'>
        <div class="caption">
            
            <p>
                <a href='{{ route("admin.imagenes.edit",$imagen->id) }}' class="btn btn-sm edit-image">
                    <i class="material-icons">edit</i>
                </a>
                <a href='{{ route("admin.imagenes.destroy",$imagen->id) }}' class="btn btn-sm delete-image">
                    <i class="material-icons">delete</i>
                </a>
            </p>
        </div>
    </div>
</div>