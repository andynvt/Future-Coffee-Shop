var $ = $;
var orderAlert = new Alert('order-tip', "You had ordered success!", 2000);
var checkLoginAlert = new Alert('ckLogin-tip', "You must login first.", 2000);
var qtyAlert = new Alert('qty-tip', "You must enter quantity more than 0!", 2000);
var alertLiked = new Alert("liked-tip", "Had added drink to your wisheslist");
var alertNotNumber = new Alert("not-number-tip", "You must enter number.");
var _this;
var drinkView;

function flyToElement(flyer, flyingTo) {
    var divider = 3;
    var flyerClone = $(flyer).clone();
    $(flyerClone).css({
        position: 'absolute',
        top: $(flyer).offset().top + "px",
        left: $(flyer).offset().left + "px",
        opacity: 1,
        'z-index': 1000
    });
    $('body').css("overflow-x", "hidden");
    $('body').append($(flyerClone));
    var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width() / divider) / 2;
    var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height() / divider) / 2;

    $(flyerClone).animate({
            opacity: 0.4,
            left: gotoX,
            top: gotoY,
            width: $(flyer).width() / divider,
            height: $(flyer).height() / divider
        }, 700,
        function () {
            $(flyingTo).fadeOut('fast', function () {
                $(flyingTo).fadeIn('fast', function () {
                    $(flyerClone).fadeOut('fast', function () {
                        $(flyerClone).remove();
                        $('body').css("overflow-x", "auto");
                    });
                });
            });
        });
    var badge = $(flyingTo).find('.badge');
    var current = parseInt(badge.html());
    badge.html(current + 1);

}


function checkQty() {
    var check = false;
    var val = $("input[name='qty']").val();
    if (Number.isInteger(parseInt(val))) {
        if (parseInt(val) < 1) {
            $(".btnMinus").addClass("disabled");
            qtyAlert.showAlert();
            $("input[name='qty']").val(1);
            check = false;
        } else {
            $(".btnMinus").removeClass("disabled");
            check = true;
        }
        if (parseInt(val) >= 100) {
            $(".btnPlus").addClass("disabled");
            check = false;
            $("input[name='qty']").val(1);
        } else {
            $(".btnPlus").removeClass("disabled");
            check = true;
        }
    } else {
        check = false;
        alertNotNumber.showAlert();
        $("input[name='qty']").val(1);
    }

    return check;
}

function minusQty() {
    var cur = parseInt($("input[name='qty']").val());
    if (cur > 1) {
        calcMoney(cur - 1);
    }
    checkQty();
}

function plusQty() {
    var cur = parseInt($("input[name='qty']").val());
    if (cur < 100) {
        calcMoney(cur + 1);
    }
    checkQty();
}

function calcMoney(qty) {
    var totalPrice = (qty * parseFloat($(".price-one").html().split("$")[1])).toFixed(2);
    $("#total-price").html("$" + totalPrice);
    $("input[name='qty']").val(qty);
}



function orderDrink(e) {
    _this = e;
    var pthImg = $(e).parent().siblings('.image').find('img').eq(0).attr('src');
    var name = $(e).siblings('.info').find('h4').html();
    var prices = "$" + parseFloat(getPriceByName(name, ListDrink)).toFixed(2);
    var describe = getDescribeByName(name, ListDrink);

    drinkView = getDrinkByName(name, ListDrink);

    $("#img-order").attr('src', pthImg);
    $("#name").html(name);
    $("#prices").html(prices);
    $("#total-price").html(prices);
    $("#describe").html(describe);
    var id = getIndexByImage(pthImg, ListDrink);
    if (ListDrink[id].like) {
        $('.btnLike').addClass('disabled');

    } else {
        $('.btnLike').removeClass('disabled');
    }

}
$(function () {
    var itemDrink = $('.image');
    itemDrink.forEach(function (it) {
        ListDrink.forEach(function (item) {
            if (item.pathImg == it.find('img').attr('src')) {
                $(it).find('i').removeClass('fa-heart-o').addClass('fa-heart');
            } else {
                $(it).find('i').removeClass('fa-heart').addClass('fa-heart-o');
            }
        });
    });

});

function orderAction() {
    if (checkQty()) {
        if (isLogin()) {
            orderAlert.showAlert();
        } else {
            checkLoginAlert.showAlert();
        }
    } else {
        qtyAlert.showAlert();
    }
}


function likeAction(e) {
    if (isLogin()) {
        var itemImg = $('.img-view').find('img').eq(0);
        var id = getIndexByImage(itemImg.attr('src'), ListDrink);
        if (ListDrink[id].like) {
            alertLiked.showAlert();
        } else {
            ListDrink[id].like = true;
            flyToElement($(itemImg), $('.btn-like'));
            $(e).addClass('disabled');
            var itemDrink = $('.image');
            for (var i = 0; i < itemDrink.length; i++) {
                it = itemDrink.eq(i);
                if (itemImg.attr('src') == it.find('img').attr('src')) {
                    $(it).find('i').removeClass('fa-heart-o').addClass('fa-heart');
                }
            }
        }
    }
}

function shopAction(e) {
    var itemImg = $(_this).parent().siblings('.image').find('img').eq(0);
    flyToElement($(itemImg), $('.btn-bag'));
    var id = getIndexByImage($(itemImg).attr('src'), ListDrink);
    ListDrink[id].shop = true;
    checkShopList();
    $("input[name='qty']").val(1);
}

function likeActionDetail(e) {
    if (isLogin()) {
        var itemImg = $('.image').find('.img-view').find('img');
        var id = getIndexByImage(itemImg.attr('src'), ListDrink);
        if (ListDrink[id].like) {
            alertLiked.showAlert();
        } else {
            ListDrink[id].like = true;
            flyToElement($(itemImg), $('.btn-like'));
            $(e).addClass('disabled');
            var itemDrink = $('.image');
            for (var i = 0; i < itemDrink.length; i++) {
                it = itemDrink.eq(i);
                if (itemImg.attr('src') == it.find('img').attr('src')) {
                    $(it).find('i').removeClass('fa-heart-o').addClass('fa-heart');
                }
            }
        }
    }
}

function shopActionDetail(e) {
    var itemImg = $('.image').find('.img-view').find('img');
    flyToElement($(itemImg), $('.btn-bag'));
    var id = getIndexByImage($(itemImg).attr('src'), ListDrink);
    ListDrink[id].shop = true;
    checkShopList();
    $("input[name='qty']").val(1);
}
$(document).ready(function () {
    if (isLogin()) {
        var like = $('.btnLike');
        $('.btnLike').on('click', function () {
            var itemImg = $(this).parents('.icons').next('img').eq(0);
            var id = getIndexByImage($(itemImg).attr('src'), ListDrink);
            if ($(this).find('i').hasClass('fa-heart-o')) {
                flyToElement($(itemImg), $('.btn-like'));
                $(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
                ListDrink[id].like = true;
            } else {
                $(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
                ListDrink[id].like = false;
            }
            checkWishList();
        });
    }
    checkQty();
});

function checkWishList() {
    var content = '';
    var count = 0;
    for (var i = 0; i < ListDrink.length; i++) {
        if (ListDrink[i].like) {
            var drink = ListDrink[i];
            content += '<li class="item col-sm-4" style="margin:10px 0; ">' +
                '<figure class="item-container-short clearfix" style="box-shadow:none; border: 1px solid #e5e5e5;border-radius:4px 16px 4px 4px">' +
                '<div class="image">' +
                '<img src="' + drink.pathImg + '">' +
                '<div class="name" style="display:flex; justify-content: space-between; background: #f2f2f2">' +
                '<h4>' + drink.name + '</h4><span> </span>' +
                '<h4>$' + drink.price.toFixed(2) + '</h4>' +
                '</div>' +
                '<a class="btnQuickView" href="detailDrink.php?drink=' + drink.name + '&user=' + getUser() + '" style="min-width:70%;text-align: center">View Details</a>' +
                '</div>' +
                '<a class="remove" onclick="clearItemLike(this)" style="position: absolute; right: 0; top:0">x</a>' +
                '</figure>' +
                '</li>';
            count++;
        }
    }
    if (count == 0) {
        var cont = '<li class="items even" style="text-align: center"><h2>Empty</h2></li>';
        $('.cartLike').html(cont);
    } else {
        $('.cartLike').html(content);
    }
    $('.btn-like').find('.badge').html(count);
}

function caclTotalMoney() {

}

function checkShopList() {
    var content = '';
    var count = 0;
    for (var i = 0; i < ListDrink.length; i++) {
        if (ListDrink[i].shop) {
            if (i % 2 == 0) {
                content += '<li class="items odd">' +
                    ' <div class="infoWrap">' +
                    '<div class="cartSection">' +
                    '<img src="' + ListDrink[i].pathImg + '" alt="" class="itemImg">' +
                    '<div class="info-item">' +
                    '<h3>' + ListDrink[i].name + '</h3>' +
                    '<h3 class="price-one" style="margin-top:-10px">$' + ListDrink[i].price.toFixed(2) + '</h3>' +
                    '<div class="flex-justify" style="width: 100px">' +
                    '<input class="form-control" type="text" name="qty" min="1"' + 'max="100" value="1" style="text-align: right; width:50px"' + 'onchange="checkQty()">' +
                    '<button class="btnMinus" onclick="minusQty(),calcTotalMoney()"><i class="fa fa-minus"></i></button>' +
                    '<button class="btnPlus" onclick="plusQty(),calcTotalMoney()"><i class="fa fa-plus"></i></button>' +
                    ' </div>' +
                    ' </div>' +
                    '</div>' +
                    '<div class="prodTotal" style="line-height: 150px;font-size: 2rem;">' +
                    ' <p id="total-price">$' + ListDrink[i].price.toFixed(2) + '</p>' +
                    '</div>' +
                    '<div class="removeWrap">' +
                    '<a class="remove" onclick="clearItemShop(this)">x</a>' +
                    '</div>' +
                    '</div>' +
                    '</li>';
            } else {
                content += '<li class="items even">' +
                    ' <div class="infoWrap">' +
                    '<div class="cartSection">' +
                    '<img src="' + ListDrink[i].pathImg + '" alt="" class="itemImg">' +
                    '<div class="info-item">' +
                    '<h3>' + ListDrink[i].name + '</h3>' +
                    '<h3 class="price-one" style="margin-top:-10px">$' + ListDrink[i].price.toFixed(2) + '</h3>' +
                    '<div class="flex-justify" style="width: 100px">' +
                    '<input class="form-control" type="text" name="qty" min="1"' + 'max="100" value="1" style="text-align: right; width:50px"' + 'onchange="checkQty()">' +
                    '<button class="btnMinus" onclick="minusQty(),calcTotalMoney()"><i class="fa fa-minus"></i></button>' +
                    '<button class="btnPlus" onclick="plusQty(),calcTotalMoney()"><i class="fa fa-plus"></i></button>' +
                    ' </div>' +
                    ' </div>' +
                    '</div>' +
                    '<div class="prodTotal" style="line-height: 150px;font-size: 2rem;">' +
                    ' <p id="total-price">$' + ListDrink[i].price.toFixed(2) + '</p>' +
                    '</div>' +
                    '<div class="removeWrap">' +
                    '<a class="remove" onclick="clearItemShop(this)">x</a>' +
                    '</div>' +
                    '</div>' +
                    '</li>';
            }
            count++;
        }
    }
    $('#drinkList').html(content);
    $('.btn-bag').find('.badge').html(count);
    if (count == 0) {
        var cont = '<li class="items even" style="text-align: center"><h2>Empty</h2></li>';
        $('#drinkList').html(cont);
    }
}

function clearItemLike(e) {
    $(e).parent().parent().hide(400);
    var badge = $('.btn-like').find('.badge');
    var current = parseInt(badge.html());
    badge.html(current - 1);
    if (current == 1) {
        var cont = '<li class="items even" style="text-align: center"><h2>Empty</h2></li>';
        $('.cartLike').html(cont);
        ListDrink.forEach(function (item) {
            item.like = false;
        });
        var itemDrink = $('.image');
        $(itemDrink).find('i').removeClass('fa-heart').addClass('fa-heart-o');
    }
}

function clearItemShop(e) {
    $(e).parent().parent().parent().hide(400);
    var badge = $('.btn-bag').find('.badge');
    var current = parseInt(badge.html());
    badge.html(current - 1);
    if (current == 1) {
        var cont = '<li class="items even" style="text-align: center"><h2>Empty</h2></li>';
        $('#drinkList').html(cont);
        ListDrink.forEach(function (item) {
            item.like = false;
        });
        var itemDrink = $('.image');
    }
}

function clearAllCart(e) {
    $(e).find('.item').hide(400);

    if ($(e).find('.cartWrap').hasClass('cartLike')) {
        $('.btn-like').find('.badge').html(0);
        ListDrink.forEach(function (item) {
            item.like = false;
        });
        var itemDrink = $('.image');
        $(itemDrink).find('i').removeClass('fa-heart').addClass('fa-heart-o');
        var cont = '<li class="items even" style="text-align: center"><h2>Empty</h2></li>';
        $(e).find('.cartLike').html(cont);
    } else {
        $('.btn-bag').find('.badge').html(0);
        ListDrink.forEach(function (item) {
            item.shop = false;
        });
        var cont = '<li class="items even" style="text-align: center"><h2>Empty</h2></li>';
        $('#drinkList').html(cont);
    }
}
