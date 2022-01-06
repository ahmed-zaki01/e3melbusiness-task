<script>
    // handle noty delete button
    $('.delete').click(function (e) {
        "use strict";
        e.preventDefault();

       let getMessage = () => {
            if (lang == "en") {
                return {
                    'text': 'Are you sure you want to delete?',
                    'yes': 'Yes',
                    'no': 'No'
                };
            } else if (lang == "ar") {
                return {
                    'text': 'تأكيد المسح؟',
                    'yes': 'نعم',
                    'no': 'لا'
                };
            }
        }

        let that = $(this);
        let noty = new Noty({
        text: getMessage().text,
        type: 'warning',
        layout: 'topRight',
        killer: true,
        buttons: [
            Noty.button(getMessage().yes, 'btn btn-success mr-2', function () {
                that.closest('form').submit();
            }),
            Noty.button(getMessage().no, 'btn btn-primary', function () {
                noty.close();
            })
        ]
        });
        noty.show();
    });
</script>
