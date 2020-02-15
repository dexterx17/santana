<div id="nav-anchor">
</div>
<div class="top-nav-line">
    <button class="pull-right" id="menu-open">
        <span class="text">
            Menu
        </span>
        <span class="icon-bar">
        </span>
        <span class="icon-bar">
        </span>
        <span class="icon-bar">
        </span>
    </button>
</div>
<div id="home">
</div>
<header>
	<div id="header" class="header menu-sidebar right-sidebar always-minimized-menu minimized-menu mc-scroll">
		<div class="header-box first pull-left">

			<div class="logo-mini pull-left">
				<a href="{{ url('/') }}">
					<!--<img width="60" height="40" class="svg logo-img" src="{{ asset('img/logo_black.png') }}" alt="Santana estudio logo">-->
					<img width="60" height="40" class="svg logo-img" src="{{ asset('images/logo-accent.svg') }}" alt="The Image">
				</a>
			</div>

			<div class="pull-left" id="languages">
		    <ul>
		      <li><a href="#" class="default-hovered active">Es</a></li>
		      <li><a href="#" class="default-hovered">En</a></li>
		    </ul>
		  </div>

		</div>

		<div class="header-box menu-box pull-left">
			
			<div class="primary">
			  <div class="navbar navbar-default" role="navigation">
				<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
				  <span class="text">Menu</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
	  
				<nav class="collapse collapsing navbar-collapse">
				  <ul class="nav navbar-nav navbar-center">
					  <li class="slide-link">
                            <a class="default-hovered" href="#nosotros">
                                Nosotros
                            </a>
                        </li>
                        <li class="slide-link">
                            <a class="default-hovered" href="#team">
                                Equipo
                            </a>
                        </li>
                        <li class="slide-link">
                            <a class="default-hovered" href="#portfolio">
                                Portafolio
                            </a>
                        </li>
                        <li class="slide-link">
                            <a class="default-hovered" href="#clients">
                                Clientes
                            </a>
                        </li>
                        <li class="slide-link">
                            <a class="default-hovered" href="#contactos">
                                Contactos
                            </a>
                        </li>
                        <li class="parent">
                          <a href="#">Opciones</a>
                          <ul class="sub">
                                <li><a href="{{ route('template','base') }}">CERO</a></li>
                                <li><a href="{{ route('template','base1') }}">UNO</a></li>
                                <li><a href="{{ route('template','base2') }}">DOS</a></li>
                          </ul>
                        </li>
						<li class="widget-box visible-xs"></li>
						

				  </ul>
				</nav>
			  </div>
			</div>

		</div>

		<div class="header-box third pull-left">
			
			<div class="header-soc-icon pull-right">
				<ul>
			       <li>
	                    <a href="https://www.facebook.com/Santanagrafico/" target="_blank">
	                        <i class="fa fa-facebook">
	                        </i>
	                    </a>
	                </li>
	                <li>
	                    <a href="https://www.behance.net/arte2599" target="_blank">
	                        <i class="fa fa-behance">
	                        </i>
	                    </a>
	                </li>
	                <li>
	                    <a href="#" target="_blank">
	                        <i class="fa fa-instagram">
	                        </i>
	                    </a>
	                </li>
		      	</ul>
			</div>
		</div>
		<button class="menu-close pull-right"><img src="{{ asset('images/close.png') }}" alt=""></button>
	</div>
</header>