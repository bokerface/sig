<div>
    <ul class="navbar-nav bg-gradient-purple sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <img src="{{ asset('/images/asset/IGOV-merah.png') }}" />
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admindashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            SERVICES
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('adminexchange') }}">
                <i class="fas fa-fw fa-exchange-alt"></i>
                <span>Exchange</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('adminletter') }}">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Letter</span></a>
        </li>


        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admintranscript') }}">
                <i class="fas fa-fw fa-print"></i>
                <span>Transcript Application</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('adminsecondarysupervisor') }}">
                <i class="fas fa-fw fa-user-tie"></i>
                <span>Secondary Supervisor</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            OTHER
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admincapacitybuilding') }}">
                <i class="fas fa-fw fa-lightbulb"></i>
                <span>Capacity Building</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            ADMINISTRATOR
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-users"></i>
                <span>Users</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('supervisor') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Supervisor</span>
            </a>
        </li>

        <div class="sidebar-heading">
            Exchange Institution
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('exchange-institution') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>List of Institutions</span></a>
        </li>
     

        {{-- <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Components</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="buttons.html">Buttons</a>
                    <a class="collapse-item" href="cards.html">Cards</a>
                </div>
            </div>
        </li> --}}


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->



        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <img src="{{ asset('images/asset/igovlogo.png') }}" width="100" class="mt-5" />
        </div>

    </ul>
</div>
