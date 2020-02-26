<!-- Portfolio -->
<section class="section portfolio  " id="portfolio">
    <div id="portfolio-anchor"></div>

    <div class="sliders close-box">
        <div class="sliders-preloader">
        	<div class="background">
				<div class="layer" style="background-color: #fff;"></div>
			    <div class="layer">
			      	<svg height="50" width="50" class="circular">
					  <circle cx="25" cy="25" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" class="path"></circle>
					</svg>
			    </div>
			</div>   
        </div>
        <div class="">
	        <!-- Sliders -->
	        <div class="container-fluid">
	    		<div class="row nav-album">
		            <!-- top nav -->
		            <div class="a-slider-tcontrols album-controls ">
		              <a href="#portfolio-anchor" class="prev p-scroll">
		                <i class="fa fa-angle-left"></i>
		              </a>
		              <a href="#portfolio-anchor" class="a-sliders-close">
		                <i class="fa fa-times"></i>
		              </a>
		              <a href="#portfolio-anchor" class="next p-scroll">
		                <i class="fa fa-angle-right"></i>
		              </a>
		            </div>
		        </div>

	            <!-- albums sliders -->
	            <div id="albom" class="album-sliders-container row"></div>
	        </div>
          <!-- /Slider -->
        </div>
    </div>
		
	<div class="wrap-isotop">
		<div id="filters" class="button-group isotop-filters">
			<div class="wrap-button">
				<button class="button is-checked" data-filter="*">All</button>

				<button class="button" data-filter=".branding">Branding</button>
				<button class="button" data-filter=".design">Design</button>
				<button class="button" data-filter=".development">Development</button>
				<button class="button" data-filter=".photography">Photography</button>
				
	    	</div>
			<div class="col-xs-12 text-center table-block">
				<h1>
					P
					<span class="big-filter">Our Portfolio</span>
					<span class="mini-filter">Porjects</span>
				</h1>
			</div>
      		<button class="hide-panel hidden-xs"><i class="fa fa-minus"></i> Hide Panel</button>	
      		<button class="show-panel hidden-xs"><i class="fa fa-bars"></i></button>	
        </div>
        
		<div class="isotope my-height">
        	@foreach($clientes as $index => $trabajo)
        	<div data-albumid="1" class="element-item development ">
	            <a class="p-scroll" href="#portfolio-anchor">
	            	<img class="replace-2x" src="@if($trabajo->imagenes()->count()>0) {{ asset('img/uploads/'.$trabajo->imagenes()->first()->ruta_265x265) }} @else {{ asset('img/portafolio/banos.jpg') }} @endif" width="348" height="244" alt="The Image">
	            	<div class="overlay">
	            		<img class="p-target svg svg" src="{{ asset('images/target.svg') }}" alt="The Image">
		                <div class="p-title">
		                  <h3 class="name">{{ $trabajo->nombre }}<br><span>Development</span></h3>
		                </div>
	            	</div>
	            </a>
        	</div>
        	@endforeach
        </div><!-- /isotope -->
	</div>
</section> 
<!-- / Portfolio -->