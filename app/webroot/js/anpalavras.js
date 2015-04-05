$(document).ready(function() {
    $( ".datepicker" ).datepicker({
        changeYear: true,
        changeMonth: true,
        minDate: "-90Y",
        maxDate: "+1Y",
        dateFormat: "yy-mm-dd"
    });

    $(".validate").validate();

    $(".btn-nota").click(function() {
    	$(".btn-nota").removeClass("btn-primary");
    	$(this).addClass("btn-primary");
    	$(".btn-salvar-nota").fadeIn(200);
    	$("#MessageRatingRating").val($(this).text());
    });
});