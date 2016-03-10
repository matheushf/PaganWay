$(document).ready(function () {
    $('.child').hide(); //Hide children by default    

    $('.parent').children().click(function () {
        $(this).children('.child').slideToggle('slow');
    }).children('.child').click(function (event) {
        event.stopPropagation();
    });

});