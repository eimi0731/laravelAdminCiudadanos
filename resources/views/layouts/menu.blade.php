<li style="  background: white;" class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a style="  background: #c53b3b; color:black;" class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Panel</span>
    </a>
    @can('ver-usuario')
    <a style="background: #c53b3b; color:black;" class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    @endcan
    @can('ver-rol')
    <a style="  background: #c53b3b; color:black;" class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    @endcan

    @can('ver-Ciudadano')
    <a style="  background: #c53b3b; color:black;" class="nav-link" href="/personas">
        <i class=" fas fa-users"></i><span>Ciudadanos</span>
    </a>
    @endcan
    <a style="background: #c53b3b; color:black;" class="nav-link" href="/entradas">
        <i class=" fa fa-check"></i><span>Entradas</span>
    </a>
</li>