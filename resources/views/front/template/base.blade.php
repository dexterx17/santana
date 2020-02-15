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
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,300,800,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
	<link rel="Stylesheet" type="text/css" href="{{ asset('css/promo.css') }}" /> 
	
	
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
    @include('front.template.partials.header',['promo'=>'si'])
    <main class="promo">

    	@include('front.sections.banner_inicial')

    	@include('front.sections.nosotros')

    	@include('front.sections.portafolio')

    	
    	@include('front.sections.contactos')

    </main>
    	@include('front.template.partials.footer')

    

	<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
	<script src="{{ asset('js/small-icons.js') }}"></script> 
	<script src="{{ asset('js/jquery.textillate.js') }}"></script>
	<script src="{{ asset('js/assets/jquery.fittext.js') }}"></script>
	<script src="{{ asset('js/assets/jquery.lettering.js') }}"></script>
	<script src="{{ asset('js/jquery.textillate.js') }}"></script> 
	<script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script> 
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> 
	<script src="{{ asset('js/jquery.appear.js') }}"></script> 

	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>