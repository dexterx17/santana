<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<title>SANTANA estudio</title>
	<link rel="shortcut icon" href="{{ asset('img/logo_simple_color.png') }}" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,300,800,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('js/fancybox/source/jquery.fancybox.css') }}">
	<link rel="stylesheet" href="{{ asset('css/dzsparallaxer.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/progress.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/variables-theme-2.css') }}"/> 
	
	<!-- IE 10-11 style fix -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ie10.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ie11.css') }}" />
	<!--[if IE 9]>   
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ie.css') }}" />
	<![endif]--> 

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div id="fb-root"></div>
	<div class="preloader" >
	    <div class="background">
	      <div class="layer" style="background-color: #fff;"></div>
		      <div class="layer">
		      	<svg height="50" width="50" class="circular">
						  <circle cx="25" cy="25" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" class="path"></circle>
						</svg>
		      </div>
	    </div>
	</div>
    <!-- content-wrap -->
    @include('front.template.partials.header_vertical')
    <main>
    <div class="background">
      <div class="layer" style="background-color: #ffffff;"></div>
    </div>
    	@include('front.sections.banner_inicial2')

    	@include('front.sections.section_video')



    	@include('front.sections.team')

    	<section class="section dafault-padding dividing-block sample-3">
	    	<div class="background">
					<div class="layer" style="background-color: #F5F5F5"></div>
				</div>

	    	<div class="row">
	    		<div class="container">
	    			<div class="col-xs-12 col-sm-9">
	    				<h5>Deseas explorar todos nuestros trabajos?</h5>
	    			</div>
	    			<div class="col-xs-12 col-sm-3 text-center">
		          <a href="#" target="blank_" class="btn btn-default red-style">Comenzar a explorar</a>
	    			</div>
	    		</div>
	    	</div>
	    </section>
    	@include('front.sections.portafolio_new')

    	
    	@include('front.sections.contactos')

    </main>
    @include('front.template.partials.footer')

    

		<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/bootstrap-select.js') }}"></script>
	<script src="{{ asset('js/bootstrap-tabcollapse.js') }}"></script> 
	<script src="{{ asset('js/dzsparallaxer.js') }}"></script> 
	<script src="{{ asset('js/easy-circle-skill.js') }}"></script>
	<script src="{{ asset('js/getshar-0.8.0.min.js') }}"></script> 
	<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/jquery.appear.js') }}"></script> 
	<script src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
	<script src="{{ asset('js/jquery.countTo.js') }}"></script> 
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> 
	<script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script> 
	<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
	<script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
	<script src="{{ asset('js/jquery.textillate.js') }}"></script> 
	<script src="{{ asset('js/jquery-asPieProgress.js') }}"></script> 
	<script src="{{ asset('js/masonry.pkgd.js') }}"></script> 
	<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script> 
	<script src="{{ asset('js/owl.carousel.js') }}"></script>
	<script src="{{ asset('js/responsiveslides.js') }}"></script>
	<script src="{{ asset('js/sliders.js') }}"></script> 
	<script src="{{ asset('js/small-icons.js') }}"></script> 
	<script src="{{ asset('js/jquery.textillate.js') }}"></script>
	<script src="{{ asset('js/assets/jquery.fittext.js') }}"></script>
	<script src="{{ asset('js/assets/jquery.lettering.js') }}"></script>
	<script src="{{ asset('js/fancybox/source/jquery.fancybox.pack.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>