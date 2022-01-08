  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ route('dashboard.index') }}" class="nav-link">Home</a>
          </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <div class="d-lg-block d-none dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">{{ auth()->guard('admins')->user()->name }}</a>
                  <div class="dropdown-menu">
                  <a class="nav-link" href="{{ route('dashboard.profile') }}">
                          <i class="fa fa-cog"></i> Edit Profile
                      </a>
                      <a class="nav-link" href="{{ route('dashboard.logout') }}">
                          <i class="fa fa-sign-out-alt"></i> Logout
                      </a>
                  </div>
              </div>
          </li>
      </ul>

  </nav>
  <!-- /.navbar -->
