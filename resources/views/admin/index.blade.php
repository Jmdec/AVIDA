<!DOCTYPE html>
<html lang="en">
    @include('admin.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  @include('admin.preloader')

  <!-- Navbar -->
  @include('admin.navbar')
    <!-- Add a new list item for updating news -->
    {{-- <li>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    </li> --}}
    {{-- <li>
        <a href="{{ route('admin.news.index') }}">Manage News</a>
    </li> --}}
<!-- Include SweetAlert JavaScript -->
{{--
    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    </li> --}}

    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form> --}}
</ul>
<script>
    function confirmLogout() {
        // Use SweetAlert to confirm logout
        Swal.fire({
            title: 'Logout',
            text: 'Are you sure you want to logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, logout'
        }).then((result) => {
            if (result.isConfirmed) {
                // If user confirms, submit the logout form
                document.getElementById('logout-form').submit();
            }
        });
    }
</script>

      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @extends('layouts.sidebar.sidebar')

    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

                <!-- ./col -->
            </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Add the word "HOMES" here -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 style="color: #333; font-family: 'Arial', sans-serif; font-weight: bold; font-size: 72px; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">HOMES</h1>
            </div>
        </div>
    </section>






{{-- @include('admin.footer') --}}
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
@include('admin.plugins')
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard.js')}}"></script>
<script src="{{ asset('sweetalert2/src/sweetalert2.min.js') }}"></script>
<script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
</body>
</html>
