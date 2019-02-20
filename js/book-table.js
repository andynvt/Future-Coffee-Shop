$('.pic-table').click(function () {
    if (!$(this).hasClass('booked')) {
        $(this).toggleClass('active');
    }
});
$('#resetBook').click(function () {
    $('.pic-table').removeClass('active');
});
