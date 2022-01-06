$(document).ready(function () {


    $.fn.dataTable.ext.errMode = 'throw';

    // move search box up to length menu
    let lengthMenu = $(".dataTables_length");
    lengthMenu.prev().insertAfter(lengthMenu);
    lengthMenu.css('float', 'none');

    // make width of datatable auto
    let dataTable = $(".dataTable ");
    dataTable.css({
        'width': '100%',
        'margin-top': '3.5rem'
    });

});
