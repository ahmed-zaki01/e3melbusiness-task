<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.index') }}" class="brand-link">
        <img src="{{ asset('dashboard_files/dist/img/logo.png') }}" alt="php task" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PHP Task</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class=" nav-link {{ set_active('dashboard') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p class="">Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.categories.index') }}" class=" nav-link {{ set_active('dashboard/categories') }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p class="">Categories</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.courses.index') }}" class=" nav-link {{ set_active('dashboard/courses') }}">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p class="">Courses</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
