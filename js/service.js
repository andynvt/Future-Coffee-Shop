var serviceFailed = new Alert('service-failed', 'You must login to use ours services!', 2000);
var serviceSuccess = new Alert('service-success', 'Thank you use ours services!', 2000);

function usesv(e) {
    $(e).attr('data-dismiss', 'modal');
    if (isLogin()) {
        serviceSuccess.showAlert();
    } else {
        serviceFailed.showAlert();
    }
}

function reset() {
    $(".movie-cost").val(0);
    $(".selectTime").val(0)
}

function myFunction(val) {
    $(".movie-cost").val((val / 60 * 10).toFixed(2));
}
