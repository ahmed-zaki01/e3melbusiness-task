<!DOCTYPE html>
<html lang="{{__('dashboard.lang')}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-Frame-Options" content="deny">

    <title> {{ __('dashboard.dashboard') }} |  {{ __('dashboard.reset_password') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('dashboard_files')}}/dist/img/favicon.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('dashboard_files')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" integrity="sha256-kqxQgiD1u2DslOB2UFKOtmYl+CpHQK2gaM3gU2V4EoY= sha384-4r9SMzlCiUSd92w9v1wROFY7DlBc5sDYaEBhcCJR7Pm2nuzIIGKVRtYWlf6w+GG4 sha512-YXZY2+disPTBpkM8kOov4hoNJ9Qx8AsrIW3ihjYGb8RlOiPQtszMU7mrvVojTjQW3Lgpa38N7gzrobRc6Zorzw==" crossorigin="anonymous">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('dashboard_files')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard_files')}}/dist/css/adminlte.min.css">
    <!-- Noty -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins')}}/noty/noty.min.css">
    <!-- Noty -->
    <script src="{{asset('dashboard/plugins')}}/noty/noty.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source%20Sans%20Pro%3A300%2C400%2C400i%2C700">
    <style>
        .login-box,
        .register-box {
            width: 450px;
        }
    </style>
</head>

<body class="hold-transition login-page">
    @include('partials._session')

    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('dashboard.login') }}"><strong> {{ __('dashboard.thaki') }}</strong></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"> {{ __('dashboard.reset_your_password') }}</p>

                @include('partials._errors')
                <form action="{{ route('dashboard.handle_reset_password', $data->token ) }}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control disabled" value="{{ $data->email ?? old('email') }}" placeholder="{{ __('dashboard.email') }}" disabled>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="{{ __('dashboard.password') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('dashboard.confirm_password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('dashboard.reset') }}</button>
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
