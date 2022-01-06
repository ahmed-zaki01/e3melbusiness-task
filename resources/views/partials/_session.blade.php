@if (session('status'))

<script>
    new Noty({
        type: 'success',
        layout: 'topRight',
        text: "{{ session('status') }}",
        timeout: 2000,
        kill: true
    }).show();
</script>

@endif

@if (session('error'))

<script>
    new Noty({
        type: 'error',
        layout: 'topRight',
        text: "{{ session('error') }}",
        timeout: 2000,
        kill: true
    }).show();
</script>

@endif
