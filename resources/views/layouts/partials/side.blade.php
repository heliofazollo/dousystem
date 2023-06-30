<div class="sidebar-content">
    <!--- Sidemenu -->
    <div id="sidebar-menu" class="slimscroll-menu">
        <ul class="metismenu" id="menu-bar">
            <li class="menu-title">Navigation</li>

            <li>
                <a href="{{url('dashboard')}}">
                    <i data-feather="home"></i>
                    <span class="badge badge-success float-right">1</span>
                    <span> Dashboard </span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);">
                    <i data-feather="globe"></i>
                    <span> DOU NACIONAL </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="{{route('simple.index')}}">Consulta Simples</a>
                    </li>
                    <li>
                        <a href="{{route('advanced.index')}}">Consulta Detalhada</a>
                    </li>
                   
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);">
                    <i data-feather="map"></i>
                    <span> DOU DF </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="{{route('simple.index')}}">Consulta Simples</a>
                    </li>
                    <li>
                        <a href="{{route('advanced.index')}}">Consulta Detalhada</a>
                    </li>
                   
                </ul>
            </li>

           
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="briefcase"></i>
                    <span>DOU TRABALHO </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="{{route('simple.index')}}">Consulta Simples</a>
                    </li>
                    <li>
                        <a href="{{route('advanced.index')}}">Consulta Detalhada</a>
                    </li>
                   
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="cloud-lightning"></i>
                    <span>JUSTIÇA FEDERAL </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="{{route('simple.index')}}">Consulta Simples</a>
                    </li>
                    <li>
                        <a href="{{route('advanced.index')}}">Consulta Detalhada</a>
                    </li>
                   
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="pen-tool"></i>
                    <span>JUSTIÇA ESTADUAL </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="{{route('simple.index')}}">Consulta Simples</a>
                    </li>
                    <li>
                        <a href="{{route('advanced.index')}}">Consulta Detalhada</a>
                    </li>
                   
                </ul>
            </li>
<li>

    <a href="javascript: void(0);">
        <i data-feather="star"></i>
        <span> FAVORITOS </span>
        <span class="menu-arrow"></span>
    </a>
    <ul class="nav-second-level" aria-expanded="false">
        <li>
            <a href="layouts-horizontal.html">LISTAGEM</a>
        </li>
       
    </ul>
</li>

<li class="menu-title">GERENCIAMENTO</li>

<li>
    <a href="javascript: void(0);">
        <i data-feather="users"></i>
        <span> USUÁRIOS </span>
        <span class="menu-arrow"></span>
    </a>
    <ul class="nav-second-level" aria-expanded="false">
        <li>
            <a href="{{route('users.index')}}">Novo Usuário</a>
        </li>
       
                <li>
                    <a href="{{route('roles.index')}}">Permissões</a>
                </li>
        
    </ul>
</li>


</div>
<!-- End Sidebar -->

<div class="clearfix"></div>
</div>
<!-- Sidebar -left -->

</div>
