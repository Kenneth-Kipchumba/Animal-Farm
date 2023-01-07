<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('animals') }}" class="nav-link {{ Request::is('animals') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Animals</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('breeds') }}" class="nav-link {{ Request::is('breeds') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Breeds</p>
    </a>
</li>
