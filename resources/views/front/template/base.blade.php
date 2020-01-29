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
	<link rel="stylesheet" href="{{ asset('js/fancybox/source/jquery.fancybox.css') }}">
	<link rel="stylesheet" href="{{ asset('css/dzsparallaxer.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/progress.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/variables-theme-2.css') }}">/> 
	


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
    <div class="preloader">
        <div class="background">
            <div class="layer" style="background-color: #fff;">
            </div>
            <div class="layer">
                <svg class="circular" height="50" width="50">
                    <circle class="path" cx="25" cy="25" fill="none" r="20" stroke-miterlimit="10" stroke-width="2">
                    </circle>
                </svg>
            </div>
        </div>
    </div>
    <!-- content-wrap -->
    @include('front.template.partials.header')
    <main>

    	@include('front.sections.banner_inicial')

    	@include('front.sections.nosotros')

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

	<script type="text/javascript">

	if ( ! window.console ) console = { log: function(){} };

	$('.promo-menu').singlePageNav({
	    offset: $('.promo-menu').outerHeight(),
	    filter: ':not(.external)',
	    updateHash: true,

	});


	$body = $('body'),

	/* SCROLL TOP and other files
	------------------------------------------------------------------*/
	$body.on('click', '.go-up', function(e) {
	  var $link = $(this).attr('href');
	  $('body, html').animate({
	    scrollTop: $('body, html').offset().top
	  }, 800);
	  e.preventDefault();
	});
	</script>
</body>
</html>