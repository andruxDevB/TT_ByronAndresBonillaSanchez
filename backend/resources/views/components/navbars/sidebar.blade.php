@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href="/">
            <img src="{{ asset('/img/logo-s.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-dark">SURTREK Traveller</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'dashboard' ? ' active bg-gradient-primary' : '' }} "
                    href="#">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-symbols-outlined opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Management</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'user-profile' ? 'active bg-gradient-primary' : '' }} "
                    href="#">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ps-2 pe-2 material-symbols-outlined text-center opacity-10">group</i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'clients' ? ' active bg-gradient-primary' : '' }} "
                    href="{{-- {{ route("clients.index") }} --}}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ps-2 pe-2 material-symbols-outlined text-center opacity-10">hail</i>
                    </div>
                    <span class="nav-link-text ms-1">Clients</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'programs' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route("programs.index") }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ps-2 pe-2 material-symbols-outlined text-center opacity-10">travel_explore</i>
                    </div>
                    <span class="nav-link-text ms-1">Programs</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Services</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'guides' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route("guides.index") }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-symbols-outlined opacity-10">directions_walk</i>
                    </div>
                    <span class="nav-link-text ms-1">Guides</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'drivers' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{-- {{ route("drivers.index") }} --}}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-symbols-outlined opacity-10">drive_eta</i>
                    </div>
                    <span class="nav-link-text ms-1">Drivers</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'hotels' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('hotels.index') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-symbols-outlined opacity-10">hotel</i>
                    </div>
                    <span class="nav-link-text ms-1">Hotels</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'cruises' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('cruises.index') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-symbols-outlined opacity-10">sailing</i>
                    </div>
                    <span class="nav-link-text ms-1">Cruises</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Account</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'profile' ? ' active bg-gradient-primary' : '' }}  "
                    href="#">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-symbols-outlined opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="#">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-symbols-outlined opacity-10">logout</i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
