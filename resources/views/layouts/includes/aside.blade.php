<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/images/mascara-anonima-48.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt blue"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('dashboardv1') }}" class="nav-link active">
                  <i class="fas fa-circle-notch nav-icon orange"></i>
                  <p>Dashboard v1</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dashboardv2') }}" class="nav-link">
                  <i class="fas fa-circle-notch nav-icon green"></i>
                  <p>Dashboard v2</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dashboardv3') }}" class="nav-link">
                  <i class="fas fa-circle-notch nav-icon red"></i>
                  <p>Dashboard v3</p>
                </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-th indigo"></i>
              <p>
                Widgets
                <span class="right badge badge-danger"></span>
              </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog green"></i>
              <p>
                Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Inactive Page</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#"  class="nav-link">
<<<<<<< HEAD
            <i class="nav-icon fas fa-user"></i>
            <p>
              Profile
              <span class="right badge badge-danger"></span>
            </p>
          </a>
=======
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger"></span>
              </p>
            </a>
>>>>>>> af943a153109ea1bf2f4f59819a83916b05ac215
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle-notch text-danger"></i>
              <p class="text">Important</p>
            </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle-notch text-warning"></i>
              <p>Warning</p>
            </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle-notch text-info"></i>
              <p>Informational</p>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="nav-icon fa fa-power-off red"></i>
            <p>
              {{ __('Logout') }}
            </p>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
