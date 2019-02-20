//Doi ten nut
function editform() {
    if ($("#change").html() == "Change") {
        $(".if").css({
            "border": "1px solid darkgray"
        });
        $(".if").prop('disabled', false);
        $("#change").html("Save");
        $("#cancel").css({
            "display": "inherit"
        });
    } else {
        $(".if").prop('disabled', true);
        $(".if").css({
            "border": "none"
        });
        $("#cancel").css({
            "display": "none"
        });
        $("#change").html("Change");
    }
}

//Doi tab
$.fn.changeTab = function () {
    var $tab = $(this).find('.tab');
    var $li = $(this).find('.list-tab>li');
    $tab.hide();
    $tab.eq(0).show();
    $li.first().show();
    $li.click(function () {
        $(this).siblings('li').removeClass('active');
        $tab.hide();
        $(this).addClass('active');
        var $target = $(this).data('target');
        $($target).fadeIn();
    });
}
$(".list-drink").changeTab();
$(".content-info").changeTab();
$("#cartBag").changeTab();
$("#likeBag").changeTab();

//Doi mat khau
function changePWD() {
    if ($(".pw").val() != "") {
        alert("You have changed your password");
        $(".pw").val("");
    } else {
        alert("Please fill in all the required fields");
    }
}

$(window).resize(function () {
    fixed_Button();
})
$(document).ready(function () {
    fixed_Button();
})

function fixed_Button() {
    var resizebtn = $(".pf");
    if ($(window).outerWidth() <= 567) {
        resizebtn.eq(0).addClass("fixed-button up");
        resizebtn.eq(1).addClass("fixed-button down");
        resizebtn.eq(0).html("<i class='fa fa-user'></i>")
        resizebtn.eq(1).html("<i class='fa fa-unlock-alt'></i>")

    } else {
        resizebtn.eq(0).removeClass("fixed-button up");
        resizebtn.eq(1).removeClass("fixed-button down");
        resizebtn.eq(0).html("<a>Profile</a>")
        resizebtn.eq(1).html("<a>Change Password</a>")

    }
}
