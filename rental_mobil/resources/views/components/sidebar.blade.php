<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/logo2.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="image mt-3">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <!-- <a href="#" class="d-block">Admin Rental</a> -->
          @auth
           @if (Auth::check())
           <div class="info">
            <a class="d-block" href="{{ route('profile.edit') }}">{{ strtoupper(Auth::user()->name) ?? "" }}</a>
            <span class="text-info">{{ Auth::user()->role }}</span>
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
            <a href="{{ url('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="{{url('timeline')}}" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Timeline
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Table
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('armada')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Armada</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('jenis_kendaraan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Jenis Kendaraan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('pembayaran')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('peminjaman')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Peminjaman</p>
                </a>
              </li>
            </ul>
            @if (Auth::user()->role == 'admin')
            <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
              <p>
                Hak Akses
              </p>
            </a>
            </li>
            @endif
            @auth
                <!-- <li class="nav-item">
                  <a href="{{ route('profile.edit') }}" class="nav-link">
                  <i class="nav-icon fas fa-ellipsis-h"></i>
                    Profile
                  </a>
                </li> -->
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-ellipsis-h"></i>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </li>
            @endauth
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
