<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.index') }}" class="brand-link">
        <img src="{{ asset('dashboard_files/dist/img/logo.png') }}" alt="{{ __('dashboard.fab_minds') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ __('dashboard.fab_minds') }}</span>
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
                        <p class="">{{ __('dashboard.dashboard') }}</p>
                    </a>
                </li>

                {{-- user management & access levels --}}
                @canany(['read users', 'read roles'])
                <li class="nav-item has-treeview {{ open_menu('dashboard/roles') }} {{ open_menu('dashboard/users') }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-user-md"></i>
                        <p>
                            {{ __('dashboard.sys_managements') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        {{-- users --}}
                        @can('read users')
                        <li class="nav-item">
                            <a href="{{ route('dashboard.users.index') }}" class=" nav-link {{ set_active('dashboard/users') }}">
                                <i class="nav-icon fa fa-user"></i>
                                <p class="">{{ __('dashboard.users') }}</p>
                            </a>
                        </li>
                        @endcan

                        {{-- roles --}}
                        @can('read roles')
                        <li class="nav-item">
                            <a href="{{ route('dashboard.roles.index') }}" class=" nav-link {{ set_active('dashboard/roles') }}">
                                <i class="nav-icon fas fa-user-check"></i>
                                <p class="">{{ __('dashboard.access_rights') }}</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcanany

                {{-- app settings --}}
                @canany([
                'update app_setting',
                'read onboarding_setting',
                ])

                <li class="
                    nav-item has-treeview
                    {{ open_menu('dashboard/settings/app') }}
                    {{ open_menu('dashboard/settings/onboarding') }}
                ">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cogs"></i>
                        <p>
                            {{ __('dashboard.general_settings') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        @can('update app_setting')
                        {{-- <li class="nav-item">
                            <a href="{{ route('dashboard.settings.app') }}" class=" nav-link {{ set_active('dashboard/settings/app') }}">
                                <i class="nav-icon fa fa-cog"></i>
                                <p class="">{{ __('dashboard.app') }}</p>
                            </a>
                        </li> --}}
                        @endcan

                        @can('read onboarding_setting')
                        <li class="nav-item">
                            <a href="{{ route('dashboard.settings.onboarding.index') }}" class=" nav-link {{ set_active('dashboard/settings/onboarding') }}">
                                <i class="nav-icon fa fa-cog"></i>
                                <p class="">{{ __('dashboard.onboarding') }}</p>
                            </a>
                        </li>
                        @endcan

                    </ul>
                </li>

                @endcanany
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
