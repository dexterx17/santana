<div class="col-xs-6 col-md-3" id="item{{ $trabajo->id }}">
    <div class="thumbnail">
        <img src='{{ asset("img/uploads/$trabajo->ruta") }}'> <div class="caption">
            <p class="text-center">
                {{ $trabajo->nombre }}
            </p>
            <p>
                <a href='{{ route("trabajos.edit",$trabajo->id) }}' class="btn btn-sm edit-image">
                    <i class="material-icons">edit</i>
                </a>
                <a href='{{ route("trabajos.destroy",$trabajo->id) }}' class="btn btn-sm delete-image">
                    <i class="material-icons">delete</i>
                </a>
            </p>
        </div>
    </div>
</div>