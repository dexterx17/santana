<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="{{ route('usuarios.show',Auth::user()->id) }}"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li>
                        <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="@if(@$active_page==='home') active @endif">
                <a href="{{ route('admin') }}">
                    <i class="material-icons">home</i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="@if(@$active_page==='clientes') active @endif">
                <a href="{{ route('clientes.index') }}">
                    <i class="material-icons col-light-blue">person</i>
                    <span>Clientes</span>
                </a>
            </li>
            <li class="@if(@$active_page==='trabajos') active @endif">
                <a href="{{ route('trabajos.index') }}">
                    <i class="material-icons">class</i>
                    <span>Trabajos</span>
                </a>
            </li>
            
            <li class="header">Admin</li>
            <li  class="@if(@$active_page==='usuarios') active @endif">
                <a href="{{ route('usuarios.index') }}">
                    <i class="material-icons col-light-blue">person</i>
                    <span>Usuarios</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright text-center">
            &copy; {{ date('Y') }} <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version text-center">
            <b>Version: </b> 0.0.1
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->