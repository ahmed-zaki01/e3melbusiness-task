<script>
    // handle noty delete button
    $('.delete').click(function (e) {
        "use strict";
        e.preventDefault();

        let that = $(this);
        let noty = new Noty({
        text: 'Are you sure you want to delete?',
        type: 'warning',
        layout: 'topRight',
        killer: true,
        buttons: [
            Noty.button('Yes', 'btn btn-success mr-2', function () {
                that.closest('form').submit();
            }),
            Noty.button('No', 'btn btn-primary', function () {
                noty.close();
            })
        ]
        });
        noty.show();
    });
</script>
