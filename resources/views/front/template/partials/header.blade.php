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
<!-- header -->
<header class="top-menu @if(@$promo=='si')promo-header @endif">
    <div class="header top-menu " id="header">
        <div class="header-box first pull-left">
            <div class="logo-mini pull-left">
                <a class="go-up" href="{{ url('/') }}">
                    <img alt="The Image" class="svg logo-img" height="40" src="{{ asset('img/logo_black.png') }}" width="120">
                    </img>
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
                    <button class="navbar-toggle btn-navbar collapsed" data-target=".primary .navbar-collapse" data-toggle="collapse" type="button">
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
                    <nav class="collapse collapsing navbar-collapse">
                        <ul class="nav navbar-nav navbar-center">
                            <li class="slide-link">
                                <a class="default-hovered" href="#nosotros">
                                    Nosotros
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
                            <li class="widget-box visible-xs">
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- .primary -->
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
        <!-- <button class="menu-close pull-right"><span class="glyphicon glyphicon-remove"></span></button> -->
        <button class="menu-close pull-right">
            <img alt="" src="{{ asset('images/close.png') }}"/>
        </button>
    </div>
</header>
<!-- /header -->