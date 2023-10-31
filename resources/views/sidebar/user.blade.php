<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('user.home') }}" class="brand-link">
        <img src="{{ asset('dist/img/logo_putih.png') }}" alt="logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Kredit BPR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('user.home') }}" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="" class="nav-link passive">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.home') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.home' ? 'active' : '' }}">
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.banner') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.banner' ? 'active' : '' }}">
                                <p>Edit Banner</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">PENGATURAN</li>
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.user') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.user' ? 'active' : '' }}">
                        <p>Manajemen User</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="fas fa-running nav-icon"></i>
                        <p>Keluar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
