<!-- Sidebar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('images/dmci.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">DMCI</a>
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
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              HOME
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ asset('admin/index.html')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Whats New</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('images/index2.html')}}   " class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Properties</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Guides</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{ route('logos.index') }}" class="nav-link">
              {{-- <i class="nav-icon fas fa-th"></i> --}}
              <p>
                  <i class="fas fa-image"></i>  Logo <!-- Update the text to Sellers -->
                  {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
          </a>
      </li>
      <li class="nav-item">
          <a href="{{ route('visions.index') }}" class="nav-link">
              {{-- <i class="nav-icon fas fa-th"></i> --}}
              <p>
                  <i class="fas fa-image"></i>  Vision <!-- Update the text to Sellers -->
                  {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
          </a>
      </li>
      <li class="nav-item">
          <a href="{{ route('seller') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                  <i class="fas fa-image"></i>  Sellers <!-- Update the text to Sellers -->
                  <span class="right badge badge-danger">New</span>
              </p>
          </a>
      </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Careers
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ asset('admin/pages/layout/top-nav.html')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Top Navigation</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('admin/pages/layout/top-nav-sidebar.html')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Top Navigation + Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('admin/pages/layout/boxed.html')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Boxed</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('admin/pages/layout/fixed-sidebar.html')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('admin/pages/layout/fixed-sidebar-custom.html')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Sidebar <small>+ Custom Area</small></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('admin/pages/layout/fixed-topnav.html')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Navbar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-footer.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Footer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Collapsed Sidebar</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Sellers
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Careers
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                      About Us
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                          Contact us
                          <i class="fas fa-angle-left right"></i>
                        </p>
                      </a>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="far fa-circle nav-icon"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
