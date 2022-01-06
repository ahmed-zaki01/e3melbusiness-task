// all custom scripts will be here
$(document).ready(function () {

    // capitalize a word string
    const capitalize = (s) => {
        if (typeof s !== 'string') return '';
        return s.charAt(0).toUpperCase() + s.slice(1);
    }; // end of capitalize

    // handle noty delete button
    $(".delete").click(function (e) {
        "use strict";
        e.preventDefault();

        let getMessage = () => {
            if (lang == "en") {
                return {
                    text: "Are you sure you want to delete?",
                    yes: "Yes",
                    no: "No",
                };
            } else if (lang == "ar") {
                return {
                    text: "تأكيد المسح؟",
                    yes: "نعم",
                    no: "لا",
                };
            }
        };

        let that = $(this);
        let noty = new Noty({
            text: getMessage().text,
            type: "warning",
            layout: "topRight",
            killer: true,
            buttons: [
                Noty.button(
                    getMessage().yes,
                    "btn btn-success mr-2",
                    function () {
                        that.closest("form").submit();
                    }
                ),
                Noty.button(getMessage().no, "btn btn-primary", function () {
                    noty.close();
                }),
            ],
        });
        noty.show();
    });

    // handle image preview
    $(".img-input").change(function () {
        if (this.files && this.files[0]) {
            $('.img-preview-container').removeClass('d-none');

            var reader = new FileReader();
            reader.onload = function (e) {
                $('.img-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]); // convert to base64 string
        }
    });
});
