
<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center @if(Request::is('dashboard')) active @endif" href="dashboard">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SMKN <sup>1</sup></div>
            </a>

            {{-- @can(')
                <a class="sidebar-brand d-flex align-items-center justify-content-center @if(Request::is('dashboard')) active @endif" href="dashboard">
                <div class="sidebar-brand-icon"> --}}
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                    {{-- <i class="fas fa-school"></i> --}}
                {{-- </div>
                <div class="sidebar-brand-text mx-3">SMKN <sup>1</sup></div>
            </a>
            <a class="sidebar-brand d-flex align-items-center justify-content-center @if(Request::is('dashboard')) active @endif" href="dashboard">
                <div class="sidebar-brand-icon"> --}}
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                    {{-- <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SMKN <sup>1</sup></div>
            </a>
            @endcan --}}
            




            @can('admin')
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item @if(Request::is('/dashboard')) active @endif">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item @if(Request::is('/siswa')) active @endif">
                <a class="nav-link" href="siswa">
                <i class="fas fa-users"></i>
                <span>Siswa</span></a>
            </li>

            <li class="nav-item @if(Request::is('/sarpras')) active @endif">
                    <a class="nav-link" href="sarpras">
                    <i class="fas fa-warehouse"></i>
                    <span>Sarana Prasarana</span></a>    
            </li>
            
           <li class="nav-item @if(Request::is('/masterpeminjaman')) active @endif">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-arrow-right"></i>
                    <span>Peminjaman</span>
                </a>
                <div id="collapseTwo" class="collapse @if(Request::is('/peminjaman') || Request::is('/peminjaman/create')) show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @if(Request::is('/peminjaman')) active @endif" href="/peminjaman">Lihat Data<a>
                        <a class="collapse-item @if(Request::is('/peminjaman/create')) active @endif" href="/peminjaman/create">Form Peminjaman</a>
                    </div>
                </div>
            </li>

            <li class="nav-item @if(Request::is('/masterpengembalian')) active @endif">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true"  aria-controls="collapseUtilities">
                <i class="fas fa-arrow-left"></i>
                <span>Pengembalian</span>
            </a>
                <div id="collapseUtilities" class="collapse @if(Request::is('/pengembalian') || Request::is('/pengembalian/create')) show @endif" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @if(Request::is('/pengembalian')) active @endif" href="/pengembalian">Lihat Data<a>
                        <a class="collapse-item @if(Request::is('/pengembalian/create')) active @endif" href="/pengembalian/create">Form Pengembalian</a>
                    </div>
                </div>
            </li>

            <li class="nav-item @if(Request::is('/masterlaporan')) active @endif">
                <a class="nav-link" href="/laporan">
                <i class="fas fa-solid fa-file-contract"></i>
                <span>Laporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            @endcan

            @can('pj')
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item @if(Request::is('/dashboard')) active @endif">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item @if(Request::is('/siswa')) active @endif">
                <a class="nav-link" href="siswa">
                <i class="fas fa-users"></i>
                <span>Siswa</span></a>
            </li>

            <li class="nav-item @if(Request::is('/sarpras')) active @endif">
                    <a class="nav-link" href="sarpras">
                    <i class="fas fa-warehouse"></i>
                    <span>Sarana Prasarana</span></a>    
            </li>
            
           <li class="nav-item @if(Request::is('/masterpeminjaman')) active @endif">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-arrow-right"></i>
                    <span>Peminjaman</span>
                </a>
                <div id="collapseTwo" class="collapse @if(Request::is('/peminjaman') || Request::is('/peminjaman/create')) show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @if(Request::is('/peminjaman')) active @endif" href="/peminjaman">Lihat Data<a>
                        <a class="collapse-item @if(Request::is('/peminjaman/create')) active @endif" href="/peminjaman/create">Form Peminjaman</a>
                    </div>
                </div>
            </li>

            <li class="nav-item @if(Request::is('/masterlaporan')) active @endif">
                <a class="nav-link" href="/laporan">
                <i class="fas fa-solid fa-file-contract"></i>
                <span>Laporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            @endcan

            @can('pg')
            <hr class="sidebar-divider my-0">

            <li class="nav-item @if(Request::is('/dashboard')) active @endif">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item @if(Request::is('/masterpengembalian')) active @endif">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true"  aria-controls="collapseUtilities">
                <i class="fas fa-arrow-left"></i>
                <span>Pengembalian</span>
            </a>
                <div id="collapseUtilities" class="collapse @if(Request::is('/pengembalian') || Request::is('/pengembalian/create')) show @endif" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @if(Request::is('/pengembalian')) active @endif" href="/pengembalian">Lihat Data<a>
                        <a class="collapse-item @if(Request::is('/pengembalian/create')) active @endif" href="/pengembalian/create">Form Pengembalian</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider my-0">
            @endcan
            
            <!-- Heading -->
            {{--<div class="sidebar-heading">
                Interface
            </div>--}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{--<li class="nav-item">
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
            </li>--}}

            <!-- Nav Item - Utilities Collapse Menu -->
            {{--<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>--}}

            <!-- Divider -->
            {{--<hr class="sidebar-divider">--}}

            <!-- Heading -->
            {{--<div class="sidebar-heading">
                Addons
            </div>--}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{--<li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item active" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>--}}

            <!-- Nav Item - Charts -->
            {{--<li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>--}}

            <!-- Nav Item - Tables -->
            {{--<li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>--}}

            <!-- Divider -->
            {{--<hr class="sidebar-divider d-none d-md-block">--}}

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->        