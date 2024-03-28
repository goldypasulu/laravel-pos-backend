<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">ADMIN BY HIM</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AB</a>
        </div>
        <ul class="sidebar-menu">

            <li>
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Header</li>
            <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                <a href="#" class="nav-link">Supplier</a>
            </li>
            <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                <a href="{{ route('categories.index') }}" class="nav-link">Category</a>
            </li>
            <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                <a href="{{ route('products.index') }}" class="nav-link">Products</a>
            </li>
            <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                <a href="{{ route('users.index') }}" class="nav-link">Users</a>
            </li>
            <li class="nav-item dropdown">
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('home') }}">General Dashboard</a>
                    </li>

                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                    </li>

                </ul>

                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>

                </ul>

                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                    </li>

                </ul>
            </li>

</div>
