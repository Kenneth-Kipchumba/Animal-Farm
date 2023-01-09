<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('feedlots') }}" class="nav-link {{ Request::is('feedlots') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Feedlots</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('breeds') }}" class="nav-link {{ Request::is('breeds') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Breeds</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('animals') }}" class="nav-link {{ Request::is('animals') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Animals</p>
    </a>
</li>

