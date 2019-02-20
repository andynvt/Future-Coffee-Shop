var $ = $,
    window = window,
    document = document;
$.fn.fixedSidebar = function () {
    $(window).resize(function () {
        if ($(window).outerWidth() < 768) {
            $(this).removeClass('fixed-top');
        }
    })
    var this_ = $(this);
    var w = this_.outerWidth();
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            this_.addClass('fixed-top');
            this_.width(w - 25);
        } else {
            this_.removeClass('fixed-top');
        }
    })
    $(document).ready(function () {
        if ($(window).scrollTop() > 100) {
            this_.addClass('fixed-top');
        } else {
            this_.removeClass('fixed-top');
        }
    })
}
$.fn.scrollToTop = function () {
    var scrollDiv = $(this);
    scrollDiv.hide();
    if ($(window).scrollTop() !== "0") {
        scrollDiv.fadeIn("slow");
    }
    $(this).click(function () { // Sự kiện click nút
        $("html, body").animate({
            scrollTop: 0
        }, "slow"); // Tạo hiệu ứng chuyển mượt
        return false;
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() < $(window).outerHeight() / 2) {
            scrollDiv.stop(false, true).fadeOut(300);
        } else {
            scrollDiv.stop(false, true).fadeIn(300);
        }
    });
}

$.fn.fadeClick = function () {
    var tar = $(this).data("target");
    $(this).click(function () {
        $(tar).fadeToggle('slow');
    })
}

$.fn.slideClick = function () {
    var tar = $(this).data("target");
    $(this).click(function () {
        $(tar).slideToggle('fast');
    });
    $(window).click(function () {
        $(tar).slideUp('fast');
    });

    $(this).click(function (event) {
        event.stopPropagation();
    });
}
$.fn.toggleMenu = function () {
    var tar = $(this).data('target');
    $(this).click(function () {
        $(tar).toggleClass('in');
        $(tar).siblings().removeClass('in');
    });
    $(window).click(function () {
        $(tar).removeClass('in');
    });
    $(window).resize(function () {
        $(tar).removeClass('in');
    });

    $(this).click(function (event) {
        event.stopPropagation();
    });
    $(tar).click(function (event) {
        event.stopPropagation();
    });
}
$.fn.fixedMenu = function (limit) {
    $(window).resize(function () {
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
            $('.navbar').removeClass('in');
        }
    })
    $(document).ready(function () {
        if ($(window).scrollTop() > limit) {
            this_.addClass('fixed-top');
        } else {
            this_.removeClass('fixed-top');
            $('.navbar').removeClass('in');
        }
    })
}
$.fn.fixedMenuTop = function () {
    $(this).fixedMenu(50);
}
$.fn.dropDown = function () {
    var $li = $(this).find("ul>li.dropdown");
    var $menuDropdown = $li.find('.menu-dropdown');
    $li.click(function () {
        $(this).siblings('li.dropdown').find('.menu-dropdown').slideUp('fast');
        $(this).find('.menu-dropdown').slideToggle();
    });
    $(window).click(function () {
        $menuDropdown.slideUp('fast');
    });

    $li.click(function (event) {
        event.stopPropagation();
    });
}
$.fn.sliderClick = function () {
    $(this).click(function () {
        var tar = $(this).data("target");
        $(this).siblings('li').removeClass('active');
        $('.slider-item').removeClass('active');
        $(tar).addClass('active');
        $(this).addClass('active');
    })
}
$.fn.showModal = function (modal, span) {
    $(this).click(function () {
        modal.fadeIn();
    });

    span.click(function () {
        modal.fadeOut();
    });
    $(window).click(function () {
        modal.hide();
    });
}
$(function slideAuto() {
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = $('.slider-item');
        var dots = $('.slider-indicator>ul li');
        slides.removeClass("active");
        dots.removeClass("active");
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides.eq(slideIndex - 1).addClass('active');
        dots.eq(slideIndex - 1).addClass('active');
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
});

(function (window, $) {
    $(function () {
        $('.ripple').on('click', function (event) {
            event.preventDefault();
            var $div = $('<div/>'),
                btnOffset = $(this).offset(),
                xPos = event.pageX - btnOffset.left,
                yPos = event.pageY - btnOffset.top;
            $div.addClass('ripple-effect');
            var $ripple = $(".ripple-effect");
            $ripple.css("height", $(this).height());
            $ripple.css("width", $(this).height());
            $div.css({
                    top: yPos - ($ripple.height() / 2),
                    left: xPos - ($ripple.width() / 2),
                    background: $(this).data("ripple-color")
                })
                .appendTo($(this));
            window.setTimeout(function () {
                $div.remove();
            }, 2000);
        });
    });

})(window, jQuery);



function showInfo() {
    $(".body-content").fadeOut();
    $(".pin").slideDown();
    $('body', 'html').animate({
        scrollTop: $(".header").scrollTop()
    });
}

function hideInfo() {
    $(".body-content").fadeIn();
    $(".pin").slideUp(100);
    $('body', 'html').animate({
        scrollTop: $(".header").scrollTop()
    });
}
