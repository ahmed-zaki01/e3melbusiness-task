<!-- jQuery -->
<script src="{{asset('dashboard_files')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('dashboard_files')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard_files')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- AdminLTE App -->
<script src="{{asset('dashboard_files')}}/dist/js/adminlte.min.js"></script>
@stack('scripts')
<script src="{{asset('dashboard_files')}}/dist/js/custom.js"></script>
<script src="{{asset('dashboard_files')}}/dist/js/ajax.js"></script>
