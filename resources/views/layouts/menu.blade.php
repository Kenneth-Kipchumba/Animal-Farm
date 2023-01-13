<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('feedlots') }}" class="nav-link {{ Request::is('feedlots') ? 'active' : '' }}">
        <i class="nav-icon fas fa-align-right"></i>
        <p>Feedlots</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('breeds') }}" class="nav-link {{ Request::is('breeds') ? 'active' : '' }}">
        <i class="nav-icon fas fa-dot-circle"></i>
        <p>Breeds</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('animals') }}" class="nav-link {{ Request::is('animals') ? 'active' : '' }}">
        <i class="nav-icon fas fa-circle"></i>
        <p>Animals</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('purchases') }}" class="nav-link {{ Request::is('purchases') ? 'active' : '' }}">
        <i class="nav-icon fas fa-coins"></i>
        <p>Purchases</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('sales') }}" class="nav-link {{ Request::is('sales') ? 'active' : '' }}">
        <i class="nav-icon fas fa-coins"></i>
        <p>Sales</p>
    </a>
</li>


