<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <!-- <a href="#" class="d-block">Khoirusyamil Yahya</a> -->
          @auth
           @if (Auth::check())
           <div class="info">
            <a class="d-block" href="{{ route('profile.edit') }}">{{ strtoupper(Auth::user()->name) ?? "" }}</a>
            <span class="text-primary">{{ Auth::user()->role }}</span>
           </div>
           @endif
           @endauth
           @guest
           <a href="#" class="d-block">Guest</a>
           @endguest
        </div>

      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Table
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @auth
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../pasien" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Pasien</p>
                </a>
              </li>
              @if (Auth::user()->role == 'administrator')
              <li class="nav-item">
                <a href="../paramedik" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Paramedik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../periksa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Periksa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Tambahan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../kelurahan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Kelurahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../unit_kerja" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Unit Kerja</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @endauth
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>