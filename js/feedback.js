$(document).ready(function () {

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function () {
        var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

        // Now highlight all the stars that's not after the current hovered star
        $(this).parent().children('li.star').each(function (e) {
            if (e < onStar) {
                $(this).addClass('hover');
            } else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function () {
        $(this).parent().children('li.star').each(function (e) {
            $(this).removeClass('hover');
        });
    });


    /* 2. Action to perform on click */
    $('#stars li').on('click', function () {
        var onStar = parseInt($(this).data('value'), 10); // The star currently selected
        var stars = $(this).parent().children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
        }
        var addImg = "";
        var msg = "";
        // JUST RESPONSE (Not needed)
        var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
        if (ratingValue == 1) {
            addImg = "image/toobad-feedback.png";
            msg = "Too bad!!";
            $("#change-feed-back").html("Why are you so angry?");

            $(".cmt-feed-back-1").css({
                "display": "block"
            });
            $(".cmt-feed-back-3").css({
                "display": "none"
            });
            $(".cmt-feed-back-5").css({
                "display": "none"
            });
        } else if (ratingValue == 2) {
            addImg = "image/badservice-feedback.png";
            msg = "Bad service!!";
            $("#change-feed-back").html("Why are you so sad?");

            $(".cmt-feed-back-1").css({
                "display": "block"
            });
            $(".cmt-feed-back-3").css({
                "display": "none"
            });
            $(".cmt-feed-back-5").css({
                "display": "none"
            });
        } else if (ratingValue == 3) {
            addImg = "image/normal-feedback.png";
            msg = "Not things special!!";

            $(".cmt-feed-back-1").css({
                "display": "none"
            });
            $(".cmt-feed-back-3").css({
                "display": "block"
            });
            $(".cmt-feed-back-5").css({
                "display": "none"
            });
        } else if (ratingValue == 4) {
            addImg = "image/good-feedback.png";
            msg = "Good!!";

            $(".cmt-feed-back-1").css({
                "display": "none"
            });
            $(".cmt-feed-back-3").css({
                "display": "none"
            });
            $(".cmt-feed-back-5").css({
                "display": "block"
            });
        } else {
            addImg = "image/excellent-feedback.png";
            msg = "Excellent!!!!";

            $(".cmt-feed-back-1").css({
                "display": "none"
            });
            $(".cmt-feed-back-3").css({
                "display": "none"
            });
            $(".cmt-feed-back-5").css({
                "display": "block"
            });
        }
        addImage(addImg, msg);
    });
});

function addImage(addImg, msg) {
    var addImgmsg = '<img class="img-feed-back" src="' + addImg + '" />' +
        '<div class="text-message"><span>' + msg + '</span></div>';
    $('.success-box').html(addImgmsg);
}

var fbWarning = new Alert('fb-warning-tip', "You must have login!", 2000);
var fbSuccess = new Alert('fb-success-tip', "Thank you!", 2000);

function sendfb() {
    $(".send-fb").attr("data-dismiss", "modal");
    if (isLogin() == 0) {
        fbWarning.showAlert();
    } else {
        fbSuccess.showAlert();
    }
}
