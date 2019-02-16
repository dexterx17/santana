<!-- PORTFOLIO -->
<section class="section portfolio " id="portfolio">
    <div id="portfolio-anchor">
    </div>
    <div class="wrap-isotop">
        <div class="isotope my-height">
            @foreach($trabajos as $trabajo)
            <div class="element-item design ">
                <a class="" href="#" target="blank_">
                    <img alt="Ba;os" class="replace-2x" height="400" src="@if($trabajo->imagenes()->count()>0) {{ asset('img/uploads/'.$trabajo->imagenes()->first()->ruta) }} @else {{ asset('img/portafolio/banos.jpg') }} @endif" width="660">
                        <div class="overlay">
                            <img alt="{{ $trabajo->nombre }}" class="p-target svg" src="images/target.svg">
                                <div class="p-title">
                                    <h3 class="name">
                                        {{ $trabajo->nombre }}
                                    </h3>
                                </div>
                            </img>
                        </div>
                    </img>
                </a>
            </div>
            @endforeach
        </div>
        <!-- /isotope -->
    </div>
</section>
<!-- / PORTFOLIO -->