<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
</head>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">AVIDA</a>
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
      <nav class="mt-2 sidebar">
        <!-- Your sidebar menu items here -->


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link">
                    <i class="fas fa-chart-bar"></i>

                    <p>Dashboard
                        <span class="badge badge-info right"></span>
                    </p>

                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.appointments') }}" class="nav-link">
                    <i class="fas fa-book"></i>

                    <p>Reservations
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('amenity') }}" class="nav-link">
                    <i class="fas fa-bed"></i>

                    <p>Amenities
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sales.index') }}" class="nav-link">
                    <i class="fas fa-shopping-cart"></i>

                    <p>FOR SALE
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lease.index') }}" class="nav-link">
                    <i class="fas fa-building"></i>

                    <p>FOR Lease
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('upload.index') }}" class="nav-link">
                    <i class="fas fa-building"></i>

                    <p>Uploaded Properties
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('award.index') }}" class="nav-link">
                    <i class="fas fa-award"></i>


                    <p>Awards
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('financing.index') }}" class="nav-link">
                    <i class="fas fa-award"></i>


                    <p>Financing
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <!-- If the user is authenticated, display the logout link -->
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="nav-link">
                    @csrf
                    <button type="submit" style="background-color: white; border: none;">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </button>
                </form>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li> --}}
        </ul>
    </nav>


    <style>
    .container {
  position: relative;
}

#sidebar {
  position: sticky;
  top: 0;
  width: 250px; /* Set the width as needed */
  max-width: 100%; /* Ensure it doesn't overflow horizontally */
  height: 100%; /* Adjust height as needed */
  overflow-y: auto;
  padding-top: 20px; /* Adjust padding as needed */
  padding-bottom: 20px; /* Adjust padding as needed */
  margin-top: 10px; /* Adjust margin as needed */
  margin-bottom: 10px; /* Adjust margin as needed */
}

.sidebar .nav-item a {
  font-size: 16px; /* Adjust font size as needed */
}



    </style>

<script>
    // Assuming you have some way to get the number of data entries in the table
var numberOfEntries = /* Get the number of data entries */;

// Assuming you have a function to update the sidebar based on the number of entries
function updateSidebar() {
  var sidebar = document.getElementById('sidebar');

  // Check if the number of entries is greater than or equal to 10
  if (numberOfEntries >= 10) {
    sidebar.classList.add('sticky');
  } else {
    sidebar.classList.remove('sticky');
  }
}

// Call the updateSidebar function when the page loads
window.addEventListener('load', updateSidebar);

// Call the updateSidebar function whenever the number of entries changes
// For example, if you're adding/removing entries dynamically to the table
// You need to call updateSidebar() every time the number of entries changes

</script>
