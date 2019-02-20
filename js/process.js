var $ = $;
$("#usern").slideClick();
$("#userfix").slideClick();
$(".navbar-bottom").fixedMenu($('.header').outerHeight());
$(".list").fixedMenu($('.navbar-top').outerHeight());

$(".btn-up").fixedMenu($('.header').outerHeight());
$(".btn-up").scrollToTop();
$('.close').click(function () {
    $("#logout").fadeOut();
});
$('input[type="submit"]').click(function () {
    $("#logout").fadeOut();
})
$("#myBtn").showModal($("#logout"), $(".close"));
$("#myBtn2").showModal($("#logout"), $(".close"));
$(".add-to-cart").click(function () {

});
$("#orderAction").click(function () {
    var sl = $("#orderAction").parent().parent().find("#sl").val();
    var num = $(".btn-bag").find(".badge").html();
    sl = parseInt(sl);
    num = parseInt(num);
    $(".btn-bag").find(".badge").html(num + sl);
});


$.fn.fixedTop = function (limit) {
    $(window).resize(function () {
        $('.list-title').outerWidth($('.right-container').outerWidth());
        if ($(window).outerWidth() < 768) {
            $(this).removeClass('fixed-top');
        }

    })
    var this_ = $(this);
    $(window).scroll(function () {
        if ($(window).scrollTop() > limit) {
            this_.addClass('fixed-top');
        } else {
            this_.removeClass('fixed-top');
        }
        $('.list-title').outerWidth($('.right-container').outerWidth());
    })
    $(document).ready(function () {
        if ($(window).scrollTop() > limit) {
            this_.addClass('fixed-top');
        } else {
            this_.removeClass('fixed-top');
        }
        $('.list-title').outerWidth($('.right-container').outerWidth());

    })
}
$.fn.fixedTop2 = function (limit, width) {
    $(window).resize(function () {
        if ($(window).outerWidth() < 768) {
            $(this).removeClass('fixed-top');
        }
        $('.left-container').outerWidth(width);
    })
    var this_ = $(this);
    $(window).scroll(function () {
        if ($(window).scrollTop() > limit) {
            this_.addClass('fixed-top');

        } else {
            this_.removeClass('fixed-top');
        }
        $('.left-container').outerWidth(width);

    })
    $(document).ready(function () {
        if ($(window).scrollTop() > limit) {
            this_.addClass('fixed-top');
        } else {
            this_.removeClass('fixed-top');
        }
    })
}
$('.list-title').outerWidth($('.right-container').outerWidth());

$(".right-container").fixedTop($('.header').outerHeight() + $('.banner-ad').outerHeight());
$(".left-container").fixedTop2($('.header').outerHeight() + $('.banner-ad').outerHeight(), $('.left-container').outerWidth());


$('#serviceList').hide();
$('#serviceOrdered').hide();
$('#serviceLike').hide();
$('#orderHistory').hide();

$('.toggle').click(function () {
    var tar = $(this).data('target');
    $(tar).siblings('.cartWrap').slideUp(100);
    $(tar).slideToggle();
    $(this).parent().siblings('h3').find('.toggle').removeClass('active');
    $(this).toggleClass('active');
});


if (isLogin()) {
    $('.has-login').show();
    $('.no-login').hide();
} else {
    $('.has-login').hide();
    $('.no-login').show();
}
$(document).ready(function () {
    if ($(window).outerWidth() >= 768) {
        $("#menu-main >li").on('mouseenter', function () {
            $(this).find('.mega-menu').slideDown();
        }).on('mouseleave', function () {
            $(this).find('.mega-menu').hide();
        });
    }
    $(window).resize(function () {
        if ($(window).outerWidth() >= 768) {
            $("#menu-main >li").on('mouseenter', function () {
                $(this).find('.mega-menu').slideDown();
            }).on('mouseleave', function () {
                $(this).find('.mega-menu').hide();
            });
        }
    })
});
$("#drinkLi .toggle-menu").slideClick();
$("#bookingLi .toggle-menu").slideClick();
$("#serviceLi .toggle-menu").slideClick();
