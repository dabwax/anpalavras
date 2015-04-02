$(document).ready(function() {
    $( ".datepicker" ).datepicker({
        changeYear: true,
        changeMonth: true,
        minDate: "-90Y",
        maxDate: "+1Y",
        dateFormat: "yy-mm-dd"
    });

    $(".validate").validate();
});