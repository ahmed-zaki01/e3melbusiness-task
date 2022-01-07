<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('dashboard_files')}}/dist/img/logo.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{asset('dashboard_files')}}/plugins/fontawesome-free/css/all.min.css"> --}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard_files')}}/dist/css/adminlte.min.css">
    <!-- Noty -->
    <link rel="stylesheet" href="{{asset('dashboard_files/plugins')}}/noty/noty.min.css">
    <!-- Noty -->
    <script src="{{asset('dashboard_files/plugins')}}/noty/noty.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source%20Sans%20Pro%3A300%2C400%2C400i%2C700">
</head>

<body class="hold-transition login-page">
    @include('partials._session')

    {{-- <h1>test</h1> --}}
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('dashboard.login') }}"><strong>PHP Task</strong></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <form action="{{ route('dashboard.attempt') }}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('dashboard_files')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('dashboard_files')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dashboard_files')}}/dist/js/adminlte.min.js"></script>

</body>

</html>
