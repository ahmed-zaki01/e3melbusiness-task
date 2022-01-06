  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ route('dashboard.index') }}" class="nav-link">{{ __('dashboard.home') }}</a>
          </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <div class="d-lg-block d-none dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">{{ __('dashboard.language') }}</a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('dashboard.lang','ar') }}"><span class="flag-icon flag-icon-sa"></span> {{ __('dashboard.arabic') }}</a>
                      <a class="dropdown-item" href="{{ route('dashboard.lang','en') }}"><span class="flag-icon flag-icon-us"></span> {{ __('dashboard.english') }}</a>
                  </div>
              </div>
          </li>
          <li class="nav-item">
              <div class="d-lg-block d-none dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">{{ auth()->user()->name }}</a>
                  <div class="dropdown-menu">
                  <a class="nav-link" href="{{ route('dashboard.profile') }}">
                          <i class="fa fa-cog"></i> {{ __('dashboard.edit_my_profile') }}
                      </a>
                      <a class="nav-link" href="{{ route('dashboard.logout') }}">
                          <i class="fa fa-sign-out-alt"></i> {{ __('dashboard.logout') }}
                      </a>
                  </div>
              </div>
          </li>
      </ul>

  </nav>
  <!-- /.navbar -->
