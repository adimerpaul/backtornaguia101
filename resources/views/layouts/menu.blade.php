<li class="{{ Request::is('tornaguias*') ? 'active' : '' }}">
    <a href="{{ route('home') }}"><i class="fa fa-edit"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('tornaguias*') ? 'active' : '' }}">
    <a href="{{ route('tornaguias.index') }}"><i class="fa fa-edit"></i><span>Tornaguias</span></a>
</li>

<li class="{{ Request::is('empresas*') ? 'active' : '' }}">
    <a href="{{ route('empresas.index') }}"><i class="fa fa-edit"></i><span>Empresas</span></a>
</li>

<li class="{{ Request::is('transportes*') ? 'active' : '' }}">
    <a href="{{ route('transportes.index') }}"><i class="fa fa-edit"></i><span>Transportes</span></a>
</li>

<li class="{{ Request::is('conductors*') ? 'active' : '' }}">
    <a href="{{ route('conductors.index') }}"><i class="fa fa-edit"></i><span>Conductores</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>

<li class="{{ Request::is('contratistas*') ? 'active' : '' }}">
    <a href="{{ route('contratistas.index') }}"><i class="fa fa-edit"></i><span>Contratistas</span></a>
</li>

