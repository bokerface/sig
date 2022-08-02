<div>
    <ul class="navbar-nav bg-gradient-purple sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
            href="{{ route('admindashboard') }}">
            <img src="{{ asset('/images/asset/IGOV-merah.png') }}" />
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('list-thesis-proposal') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Thesis Proposals</span></a>
        </li>
    </ul>
</div>
