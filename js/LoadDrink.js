//Khởi tạo đối tượng 
function Drink(name, price, view, kind, describe, state, like, shop, pathImg) {
    this.name = name;
    this.price = price;
    this.view = view;
    this.kind = kind;
    this.describe = describe;
    this.state = state;
    this.like = like;
    this.shop = shop;
    this.pathImg = pathImg;
}

Drink.prototype.getName = function () {
    return this.name;
};
Drink.prototype.getPrice = function () {
    return this.price;
};
Drink.prototype.getView = function () {
    return this.view;
};
Drink.prototype.getKind = function () {
    return this.kind;
};
Drink.prototype.getDescribe = function () {
    return this.describe;
};
Drink.prototype.getState = function () {
    return this.state;
};
Drink.prototype.getLike = function () {
    return this.like;
};
Drink.prototype.getShop = function () {
    return this.shop;
};
Drink.prototype.getPthImg = function () {
    return this.pathImg;
};
var getDescribeByName = function (name, ListDrink) {
    ListDrink.forEach(function (drink) {
        if (drink.name == name) {
            return drink.describe;
        }
    });
}
var getPriceByName = function (name, ListDrink) {
    var price = 0;
    ListDrink.forEach(function (drink) {
        if (drink.name == name) {
            price = drink.price;
        }
    });
    return price;
}
var getDrinkByName = function (name, ListDrink) {
    var drinkOb;
    ListDrink.forEach(function (drink) {
        if (drink.name == name) {
            drinkOb = drink;
        }
    });
    return drinkOb;
}
var getDrinkByImage = function (img, ListDrink) {
    var drinkOb;
    ListDrink.forEach(function (drink) {
        if (drink.pathImg == img) {
            drinkOb = drink;
        }
    });
    return drinkOb;
}
var getIndexByImage = function (img, ListDrink) {
    var id;
    for (var i = 0; i < ListDrink.length; i++) {
        var drink = ListDrink[i];
        if (drink.pathImg == img) {
            id = i;
        }
    }
    return id;
}
//Khai báo tham số

var $ = $;
var view = 0; //0: grid, 1: list
var qty = 0;
var sortItem = [
    "Default",
    "Name (A > Z)",
    "Name (Z > A)",
    "Price (Low > High)",
    "Price (High > Low)",
    "View (Low > High)",
    "View (High > Low)"
];
var showQty = ["All", "12", "16", "20", "30"];
var categoryIcon = [

];
var categoryItem = [
    "All Drinks",
    "Hot Coffee",
    "Iced Coffee",
    "Fruits",
    "Soft Drink",
    "Tea",
    "Chocolate",
    "Cocktail",
    "Soda",
    "Food",
    "Other"
];
var DrinkList = [];
var ListDrink = [];

var pathImgArr = [
    "image/cocktail/Banana Martini Cocktail.png",
    "image/cocktail/Berry Truffle Cocktail.png",
    "image/cocktail/Bourbon Caramel Cocktail.png",
    "image/cocktail/Cappuccino Martini Cocktail.png",
    "image/cocktail/Coconut Martini Cocktail.png",
    "image/cocktail/Chocolate Martini Cocktail.png",
    "image/cocktail/Lemon Cocktail.png",
    "image/chocolate/Black Cherry Chocolate.png",
    "image/chocolate/Chocolate Caramel.png",
    "image/chocolate/Chocolate.png",
    "image/Food/cook.png",
    "image/Food/sandwich.png",
    "image/Food/sweet sandwich.png",
    "image/fruits/Cherry.png",
    "image/fruits/Kiwi.png",
    "image/fruits/Lemon.png",
    "image/fruits/Orange.png",
    "image/fruits/Strawberry.png",
    "image/hot coffee/Americano.png",
    "image/hot coffee/cappuccino.png",
    "image/hot coffee/Chai Latte.png",
    "image/hot coffee/Espresso.png",
    "image/hot coffee/Latte.png",
    "image/hot coffee/Mocha Latte.png",
    "image/hot coffee/Mocha.png",
    "image/hot coffee/Salted Caramel Latte.png",
    "image/hot coffee/Vanilla Latte.png",
    "image/iced coffee/Iced Americano.png",
    "image/iced coffee/Iced Caramel Macchiato.png",
    "image/iced coffee/Iced Coconut Milk Mocha.png",
    "image/iced coffee/Iced Coffee.png",
    "image/iced coffee/Iced Latte.png",
    "image/iced coffee/Iced Mocha.png",
    "image/other/Blueberry White Mocha.png",
    "image/other/Frosted Mint Mocha.png",
    "image/other/Iced Chai Latte.png",
    "image/other/Toffee Bar Mocha.png",
    "image/other/Vanilla Cola.png",
    "image/soda/Berrymint Cream Soda.png",
    "image/soda/Black Cherry Chocolate.png",
    "image/soda/Pineapple Caramel Cream Soda.png",
    "image/soda/Spiced Apple Soda.png",
    "image/soda/Strawberry Pineapple Crafted Soda.png",
    "image/soda/Tiramisu Cream Soda.png",
    "image/soft drinks/Cocacola.png",
    "image/soft drinks/Mirinda.png",
    "image/tea/Apricot Cherry Green Tea.png",
    "image/tea/Berry Peach Tea.png",
    "image/tea/Bourbon Tea.png",
    "image/tea/Cran Raspberry Tea.png",
    "image/tea/Cucumber Palmer.png",
    "image/tea/hot tea.png",
    "image/tea/Huckleberry Melon Tea.png",
];
var nameArr = [
    "Banana Martini Cocktail",
    "Berry Truffle Cocktail",
    "Bourbon Caramel Cocktail",
    "Cappuccino Martini Cocktail",
    "Coconut Martini Cocktail",
    "Chocolate Martini Cocktail",
    "Lemon Cocktail",
    "Black Cherry Chocolate",
    "Chocolate Caramel",
    "Hot Chocolate",
    "Cook",
    "Sandwich",
    "Sweet sandwich",
    "Cherry",
    "Kiwi",
    "Lemon",
    "Orange",
    "Strawberry",
    "Americano",
    "Cappuccino",
    "Chai Latte",
    "Espresso",
    "Latte",
    "Mocha Latte",
    "Mocha",
    "Salted Caramel Latte",
    "Vanilla Latte",
    "Iced Americano",
    "Iced Caramel Macchiato",
    "Iced Coconut Milk Mocha",
    "Iced Espresso",
    "Iced Latte",
    "Iced Mocha",
    "Blueberry White Mocha",
    "Frosted Mint Mocha",
    "Iced Chai Latte",
    "Toffee Bar Mocha",
    "Vanilla Cola",
    "Berrymint Cream Soda",
    "Black Cherry Chocolate",
    "Pineapple Caramel Cream Soda",
    "Spiced Apple Soda",
    "Strawberry Pineapple Crafted Soda",
    "Tiramisu Cream Soda",
    "Cocacola",
    "Mirinda",
    "Apricot Cherry Green Tea",
    "Berry Peach Tea",
    "Bourbon Tea",
    "Cran Raspberry Tea",
    "Cucumber Palmer",
    "Hot Tea",
    "Huckleberry Melon Tea"


];
var priceArr = [
    2.75,
    2.75,
    3.25,
    2.75,
    4.50,
    5.00,
    2.50, //cocktail
    4.50,
    4.00,
    3.00, //chocolate
    2.00,
    3.00,
    3.00, //food
    2.75,
    2.75,
    2.00,
    2.50,
    2.75, // fruits
    2.75,
    3.50,
    3.50,
    2.50,
    3.50,
    4.25,
    3.50,
    3.75,
    2.75, // hot coffee
    3.00,
    3.50,
    3.75,
    2.75,
    3.25,
    4.25, // iced coffee
    5.00,
    4.25,
    3.50,
    3.75,
    3.75, // other
    3.75,
    2.75,
    4.00,
    3.25,
    3.25,
    3.00, // soda
    2.75,
    2.75, // soft drinks
    3.00,
    3.00,
    3.00,
    3.00,
    3.00,
    2.00,
    3.00 // tea
];
var viewArr = [
    10,
    8,
    13,
    8,
    12,
    13,
    6,
    8,
    9,
    12,
    20,
    17,
    19,
    10,
    8,
    6,
    7,
    9,
    19,
    20,
    10,
    18,
    10,
    11,
    11,
    8,
    13,
    15,
    16,
    16,
    15,
    10,
    12,
    10,
    11,
    10,
    14,
    12,
    8,
    9,
    7,
    7,
    8,
    7,
    14,
    15,
    9,
    9,
    8,
    6,
    6,
    8,
    7
];
var kindArr = [
    "Cocktail",
    "Cocktail",
    "Cocktail",
    "Cocktail",
    "Cocktail",
    "Cocktail",
    "Cocktail",
    "Chocolate",
    "Chocolate",
    "Chocolate",
    "Food",
    "Food",
    "Food",
    "Fruits",
    "Fruits",
    "Fruits",
    "Fruits",
    "Fruits",
    "Hot Coffee",
    "Hot Coffee",
    "Hot Coffee",
    "Hot Coffee",
    "Hot Coffee",
    "Hot Coffee",
    "Hot Coffee",
    "Hot Coffee",
    "Hot Coffee",
    "Iced Coffee",
    "Iced Coffee",
    "Iced Coffee",
    "Iced Coffee",
    "Iced Coffee",
    "Iced Coffee",
    "Other",
    "Other",
    "Other",
    "Other",
    "Other",
    "Soda",
    "Soda",
    "Soda",
    "Soda",
    "Soda",
    "Soda",
    "Soft Drink",
    "Soft Drink",
    "Tea",
    "Tea",
    "Tea",
    "Tea",
    "Tea",
    "Tea",
    "Tea"
];
var describeArr = [
    "Sweet taste accumulated on a cocktail.Enjoy with elegant style.",
    "Sweet taste accumulated on a cocktail.Enjoy with elegant style.",
    "Sweet taste accumulated on a cocktail.Enjoy with elegant style.",
    "Sweet taste accumulated on a cocktail.Enjoy with elegant style.",
    "Sweet taste accumulated on a cocktail.Enjoy with elegant style.",
    "Sweet taste accumulated on a cocktail.Enjoy with elegant style.",
    "Sweet taste accumulated on a cocktail.Enjoy with elegant style.",
    "The beauty of youthfulness, sweet chocolate will help you relax.",
    "The beauty of youthfulness, sweet chocolate will help you relax.",
    "The beauty of youthfulness, sweet chocolate will help you relax.",
    "Represents the subtlety!Enjoy fast food.You will save a lot of time",
    "Represents the subtlety!Enjoy fast food.You will save a lot of time",
    "Represents the subtlety!Enjoy fast food.You will save a lot of time",
    "Rich diversity!Enjoy the beauty of nature.Fresh fruit flavor",
    "Rich diversity!Enjoy the beauty of nature.Fresh fruit flavor",
    "Rich diversity!Enjoy the beauty of nature.Fresh fruit flavor",
    "Rich diversity!Enjoy the beauty of nature.Fresh fruit flavor",
    "Rich diversity!Enjoy the beauty of nature.Fresh fruit flavor",
    "Specialty of the future cafe.Hot coffee taste",
    "Specialty of the future cafe.Hot coffee taste",
    "Specialty of the future cafe.Hot coffee taste",
    "Specialty of the future cafe.Hot coffee taste",
    "Specialty of the future cafe.Hot coffee taste",
    "Specialty of the future cafe.Hot coffee taste",
    "Specialty of the future cafe.Hot coffee taste",
    "Specialty of the future cafe.Hot coffee taste",
    "Specialty of the future cafe.Hot coffee taste",
    "Specialty of the future cafeIced coffee taste",
    "Specialty of the future cafe.Iced coffee taste",
    "Specialty of the future cafe.Iced coffee taste",
    "Specialty of the future cafe.Iced coffee taste",
    "Specialty of the future cafe.Iced coffee taste",
    "Specialty of the future cafe.Iced coffee taste",
    "The climax of the combination.The mix of flavors",
    "The climax of the combination.The mix of flavors",
    "The climax of the combination.The mix of flavors",
    "The climax of the combination.The mix of flavors",
    "The climax of the combination.The mix of flavors",
    "Reduce stress and make you more active in life.Special soda flavor",
    "Reduce stress and make you more active in life.Special soda flavor",
    "Reduce stress and make you more active in life.Special soda flavor",
    "Reduce stress and make you more active in life.Special soda flavor",
    "Reduce stress and make you more active in life.Special soda flavor",
    "Reduce stress and make you more active in life.Special soda flavor",
    "Simple but powerful. Not sophisticated but quality.Original cocacola",
    "Simple but powerful. Not sophisticated but quality.Original mirinda",
    "The mystery comes from nature.Fresh tea flavor",
    "The mystery comes from nature.Fresh tea flavor",
    "The mystery comes from nature.Fresh tea flavor",
    "The mystery comes from nature.Fresh tea flavor",
    "The mystery comes from nature.Fresh tea flavor",
    "The mystery comes from nature.Fresh tea flavor",
    "The mystery comes from nature.Fresh tea flavor"
];
var stateArr = [
    "New Arrivals",
    "New Arrivals",
    "Best Sellers",
    "Popular",
    "New Arrivals",
    "Best Sellers",
    "Popular", // cocktail
    "New Arrivals",
    "Best Sellers",
    "Popular", //chocolate
    "Popular",
    "Popular",
    "Best Sellers", //cook
    "New Arrivals",
    "New Arrivals",
    "Popular",
    "Popular",
    "Popular", // fruits
    "Best Sellers",
    "Best Sellers",
    "Popular",
    "Best Sellers",
    "Popular",
    "Popular",
    "Popular",
    "Popular",
    "Popular", // hot coffee
    "Best Sellers",
    "Best Sellers",
    "Best Sellers",
    "Best Sellers",
    "Popular",
    "Popular", // iced coffee
    "New Arrivals",
    "Popular",
    "Popular",
    "Popular",
    "New Arrivals", // other
    "Popular",
    "New Arrivals",
    "New Arrivals",
    "New Arrivals",
    "Popular",
    "New Arrivals", // soda
    "Popular",
    "Popular", // soft drinks
    "New Arrivals",
    "New Arrivals",
    "New Arrivals",
    "Popular",
    "New Arrivals",
    "Popular",
    "Popular",
];

function createDrinkList() {
    for (var i = 0; i < nameArr.length; i++) {
        DrinkList.push(new Drink(nameArr[i], priceArr[i], viewArr[i], kindArr[i], describeArr[i], stateArr[i], false, false, pathImgArr[i]));
    }
    return DrinkList;
}

ListDrink = createDrinkList();
qty = ListDrink.length;
//Xử lý dữ liệu

function loadGridView(ListDrink) {
    var gridView = '';
    $("#list-box").removeClass("list-view");
    view = 0;
    qty = qty >= ListDrink.length ? ListDrink.length : qty;
    for (var i = 0; i < qty; i++) {
        var drink = ListDrink[i];
        gridView += '<div class="col-tn-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">' +
            '<figure class="item-container">' +
            '<div class="item-box">' +
            '<div class="image">' +
            '<div class="icons ">' +
            '<span class="view-times">' +
            '<i class="fa fa-eye"></i>' +
            '<small>' + drink.view + 'k</small>' +
            '</span>' +
            '<div class="iconaction">' +
            '<a class="btnShare" onclick="shareFB()"> <i class="fa fa-share"></i></a>' +
            '<a class="btnLike"><i class=" fa fa-heart-o"></i></a>' +
            '</div>' +
            '</div>' +
            '<img src="' + drink.pathImg + '">' +
            '</div>' +
            '<figcaption>' +
            '<div class="info clearfix ">' +
            '<div class="name ">' +
            '<h4>' + drink.name + '</h4>' +
            '<hr>' +
            '<h4 class="price ">$' + drink.price.toFixed(2) + '</h4>' +
            '</div>' +
            '</div>';
        if (isLogin()) {
            var username = getUser();
            gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '&user=' + username + '">View Details</a>';
        } else {
            gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '">View Details</a>';
        }
        gridView += '<a class="add-to-cart" data-toggle="modal" data-target="#showOrder" onclick="orderDrink(this)">Order</a>' +
            '</figcaption>' +
            '</div>' +
            '</figure>' +
            '</div>';
    }
    return gridView;
}

function loadGridViewLimit(ListDrink, begin, end) {
    var gridView = '';
    view = 0;
    end = end >= ListDrink.length ? ListDrink.length : end;
    for (var i = begin; i < end; i++) {
        var drink = ListDrink[i];
        gridView += '<div class="col-tn-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">' +
            '<figure class="item-container">' +
            '<div class="item-box">' +
            '<div class="image">' +
            '<div class="icons">' +
            '<span class="view-times">' +
            '<i class="fa fa-eye"></i>' +
            '<small>' + drink.view + 'k</small>' +
            '</span>' +
            '<div class="iconaction">' +
            '<a class="btnShare" onclick="shareFB()"> <i class="fa fa-share"></i></a>' + '<a class="btnLike"><i class=" fa fa-heart-o "></i></a>' +
            '</div>' +
            '</div>' +
            '<img src="' + drink.pathImg + '">' +
            '</div>' +
            '<figcaption>' +
            '<div class="info clearfix ">' +
            '<div class="name ">' +
            '<h4>' + drink.name + '</h4>' +
            '<hr>' +
            '<h4 class="price ">$' + drink.price.toFixed(2) + '</h4>' +
            '</div>' +
            '</div>';
        if (isLogin()) {
            var username = getUser();
            gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '&user=' + username + '">View Details</a>';
        } else {
            gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '">View Details</a>';
        }
        gridView += '<a class="add-to-cart" data-toggle="modal" data-target="#showOrder" onclick="orderDrink(this)">Order</a>' +
            '</figcaption>' +
            '</div>' +
            '</figure>' +
            '</div>';
    }
    return gridView;
}

function loadListView(ListDrink) {
    var gridView = '';
    qty = qty >= ListDrink.length ? ListDrink.length : qty;
    $("#list-box").addClass("list-view");
    for (var i = 0; i < qty; i++) {
        var drink = ListDrink[i];
        gridView += '<div class="col-tn-12">' +
            '<figure class="item-container list-view">' +
            '<div class="item-box clearfix">' +
            '<div class="image-list col-xs-5 col-md-3">' +
            '<div class="icons list-view">' +
            '<span class="view-times">' +
            '<i class="fa fa-eye"></i>' +
            '<small>' + drink.view + 'k</small>' +
            '</span>' +
            '<div class="iconaction">' +
            '<a class="btnShare" onclick="shareFB()"> <i class="fa fa-share"></i></a>' + '<a class="btnLike"><i class=" fa fa-heart-o "></i></a>' +
            '</div>' +
            '</div>' +
            '<img src="' + drink.pathImg + '">' +
            '</div>' +
            '<figcaption class="col-xs-7 col-md-9">' +
            '<div class="info clearfix ">' +
            '<div class="name align-left ">' +
            '<h4>' + drink.name + '</h4>' +
            '<p class="describe">' + drink.describe + '</p>' +
            '<h4 class="price align-left ">$' + drink.price.toFixed(2) + '</h4>' +
            '</div>' +
            '</div>' +
            '<div class="flex-justify">';
        if (isLogin()) {
            var username = getUser();
            gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '&user=' + username + '">View Details</a>';
        } else {
            gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '">View Details</a>';
        }
        gridView += '<a class="add-to-cart" data-toggle="modal" data-target="#showOrder" onclick="orderDrink(this)">Order</a>' +
            '</figcaption>' +
            '</div>' +
            '</figure>' +
            '</div>';
    }
    view = 1;
    return gridView;
}

function loadListViewLimit(ListDrink, begin, end) {
    var gridView = '';
    view = 1;
    end = end >= ListDrink.length ? ListDrink.length : end;
    for (var i = begin; i < end; i++) {
        var drink = ListDrink[i];
        gridView += '<div class="col-tn-12">' +
            '<figure class="item-container list-view">' +
            '<div class="item-box clearfix">' +
            '<div class="image-list col-xs-5 col-md-3">' +
            '<div class="icons list-view">' +
            '<span class="view-times">' +
            '<i class="fa fa-eye"></i>' +
            '<small>' + drink.view + 'k</small>' +
            '</span>' +
            '<div class="iconaction">' +
            '<a class="btnShare" onclick="shareFB()"> <i class="fa fa-share"></i></a>' + '<a class="btnLike"><i class=" fa fa-heart-o "></i></a>' +
            '</div>' +
            '</div>' +
            '<img src="' + drink.pathImg + '">' +
            '</div>' +
            '<figcaption class="col-xs-7 col-md-9">' +
            '<div class="info clearfix ">' +
            '<div class="name align-left ">' +
            '<h4>' + drink.name + '</h4>' +
            '<p class="describe">' + drink.describe + '</p>' +
            '<h4 class="price align-left ">$' + drink.price.toFixed(2) + '</h4>' +
            '</div>' +
            '</div>' +
            '<div class="flex-justify">';
        if (isLogin()) {
            var username = getUser();
            gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '&user=' + username + '">View Details</a>';
        } else {
            gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '">View Details</a>';
        }
        gridView += '<a class="add-to-cart" data-toggle="modal" data-target="#showOrder" onclick="orderDrink(this)">Order</a>' +
            '</div>' +
            '</figcaption>' +
            '</div>' +
            '</figure>' +
            '</div>';
    }
    return gridView;
}

function changeView(contentWrite) {
    $("#list-box").html(contentWrite);
}

function clickChangeView(e, contentWrite) {
    changeView(contentWrite);
    $(e).addClass('active');
    $(e).siblings('.btn').removeClass("active");
}
//Tạo hàm sắp xếp
function sortByNameA(ListDrink) {
    ListDrink.sort(function (a, b) {
        return a.name.localeCompare(b.name);
    });
}

function sortByNameD(ListDrink) {
    ListDrink.reverse(function (a, b) {
        return a.name.localeCompare(b.name);
    });
}

function sortByPriceA(ListDrink) {
    ListDrink.sort(function (a, b) {
        return a.price - b.price;
    });
}

function sortByPriceD(ListDrink) {
    ListDrink.reverse(function (a, b) {
        return a.price - b.price;
    });
}

function sortByViewA(ListDrink) {
    ListDrink.sort(function (a, b) {
        return a.view - b.view;
    });
}

function sortByViewD(ListDrink) {
    ListDrink.reverse(function (a, b) {
        return a.view - b.view;
    });
}

function sortAction(e) {
    var select = e.options[e.selectedIndex].value;
    if (view == 0) {
        switch (select) {
            case sortItem[0]:
                DrinkList = createDrinkList();
                changeView(loadGridView(DrinkList));
                break;
            case sortItem[1]:
                sortByNameA(ListDrink);
                changeView(loadGridView(ListDrink));
                break;
            case sortItem[2]:
                sortByNameD(ListDrink);
                changeView(loadGridView(ListDrink));
                break;
            case sortItem[3]:
                sortByPriceA(ListDrink);
                changeView(loadGridView(ListDrink));
                break;
            case sortItem[4]:
                sortByPriceD(ListDrink);
                changeView(loadGridView(ListDrink));
                break;
            case sortItem[5]:
                sortByViewA(ListDrink);
                changeView(loadGridView(ListDrink));
                break;
            case sortItem[6]:
                sortByViewD(ListDrink);
                changeView(loadGridView(ListDrink));
                break;
        }
    } else {
        switch (select) {
            case sortItem[0]:
                DrinkList = createDrinkList();
                changeView(loadListView(DrinkList));
                break;
            case sortItem[1]:
                sortByNameA(ListDrink);
                changeView(loadListView(ListDrink));
                break;
            case sortItem[2]:
                sortByNameD(ListDrink);
                changeView(loadListView(ListDrink));
                break;
            case sortItem[3]:
                sortByPriceA(ListDrink);
                changeView(loadListView(ListDrink));
                break;
            case sortItem[4]:
                sortByPriceD(ListDrink);
                changeView(loadListView(ListDrink));
                break;
            case sortItem[5]:
                sortByViewA(ListDrink);
                changeView(loadListView(ListDrink));
                break;
            case sortItem[6]:
                sortByViewD(ListDrink);
                changeView(loadListView(ListDrink));
                break;
        }
    }

}


//Số lượng hiển thị trên trang
function showAction(e) {
    var select = e.options[e.selectedIndex].value;
    if (view == 0) {
        switch (select) {
            case showQty[0]:
                qty = DrinkList.length;
                changeView(loadGridView(DrinkList));
                break;
            case showQty[1]:
                qty = showQty[1];
                changeView(loadGridView(ListDrink));
                break;
            case showQty[2]:
                qty = showQty[2];
                changeView(loadGridView(ListDrink));
                break;
            case showQty[3]:
                qty = showQty[3];
                changeView(loadGridView(ListDrink));
                break;
            case showQty[4]:
                qty = showQty[4];
                changeView(loadGridView(ListDrink));
                break;
        }
    } else {
        switch (select) {
            case showQty[0]:
                qty = DrinkList.length;
                changeView(loadListView(DrinkList));
                break;
            case showQty[1]:
                qty = showQty[1];
                changeView(loadListView(ListDrink));
                break;
            case showQty[2]:
                qty = showQty[2];
                changeView(loadListView(ListDrink));
                break;
            case showQty[3]:
                qty = showQty[3];
                changeView(loadListView(ListDrink));
                break;
            case showQty[4]:
                qty = showQty[4];
                changeView(loadListView(ListDrink));
                break;
        }
    }
    pagination();
}

//Lọc theo giá tiền

function filterByPrice(id) {
    resetFilter();
    var min = parseFloat($(id).find('span').first().html().split("$")[1]),
        max = parseFloat($(id).find('span').last().html().split("$")[1]);
    var lstFilter = [];
    for (var i = 0; i < ListDrink.length; i++) {
        var item = ListDrink[i];
        if (item.price >= min && item.price <= max) {
            lstFilter.push(item);
        }
    }
    if (view == 0) {
        sortByPriceA(lstFilter);
        changeView(loadGridView(lstFilter));
        $(".quantityAlert").html("About " + lstFilter.length + " results:")
    }
}
var filterEx = [];
$(function filterByRange() {
    var ids = $("li.check").find('input');
    for (var n = 0; n < ids.length; n++) {
        var id = ids[n];
        var child = $(id).siblings('span');
        var min = parseFloat(child.eq(0).html()),
            max = parseFloat(child.eq(1).html());

        var lstFilter = [];
        for (var i = 0; i < ListDrink.length; i++) {
            var item = ListDrink[i];
            if (item.price >= min && item.price <= max) {
                lstFilter.push(item);
            }
        }
        filterEx[n] = lstFilter;
        child.eq(2).html(lstFilter.length);
        if (child.eq(2).html() == 0) {
            child.eq(2).parent().hide();
        } else {
            child.eq(2).parent().show();
        }

    }

});

function filterbyCheck(th, n) {
    if (view == 0) {
        sortByPriceA(filterEx[n]);
        changeView(loadGridView(filterEx[n]));
    }
    $(th).parent().siblings().find('input').prop('checked', false);
    $("#showPerPage").val(12);
    qty = showQty[1];
    paginationBy(filterEx[n].length);
    $(".quantityAlert").html("About " + filterEx[n].length + " results:")
}

function resetFilter() {
    if (view == 0) {
        changeView(loadGridView(DrinkList));
    } else {
        changeView(loadListView(DrinkList));
    }
    $("input[type='checkbox']").prop('checked', false);
    $("#showPerPage").val(12);
    qty = showQty[1];
    changeView(loadGridView(DrinkList));
    pagination();
    $(".quantityAlert").html("");
}
//Phân trang
function pagination() {
    var all = ListDrink.length;
    var content = '';
    for (var i = 0; i < Math.ceil(all / qty); i++) {
        if (i == 0) {
            content += '<li class="active" onclick="switchPage(this)"><a>' + (i + 1) + '</a></li>';
        } else {
            content += '<li onclick="switchPage(this)"><a>' + (i + 1) + '</a></li>';
        }
    }
    $(".pagination").html(content);
}

function paginationBy(numPage) {
    var all = numPage;
    var content = '';
    for (var i = 0; i < Math.ceil(all / qty); i++) {
        if (i == 0) {
            content += '<li class="active" onclick="switchPage(this)"><a>' + (i + 1) + '</a></li>';
        } else {
            content += '<li onclick="switchPage(this)"><a>' + (i + 1) + '</a></li>';
        }
    }
    $(".pagination").html(content);
}

function switchPage(current) {
    var pageIndex = parseInt($(current).find('a').html());
    if (pageIndex <= $(".pagination").find('li').length) {
        $(".pagination").find('li').removeClass("active");
        $(current).addClass("active");
        var begin = (pageIndex - 1) * qty;
        var end = parseInt(begin) + parseInt(qty);
        if (view == 0) {
            changeView(loadGridViewLimit(ListDrink, begin, end));
        } else {
            changeView(loadListViewLimit(ListDrink, begin, end));
        }
    }
}
//Phân loại đồ uống
function loadByKind(kindName) {
    $("#kindName").html(kindName);
    var lstOfKind = [];

    if (kindName == "All Drinks" || kindName == "") {
        $("#showPerPage").val(12);
        qty = showQty[1];
        changeView(loadGridView(DrinkList));
        pagination();
        $(".quantityAlert").html('');

    } else {
        ListDrink.forEach(function (drink) {
            if (drink.kind == kindName) {
                lstOfKind.push(drink);
            }
        });
        $("#showPerPage").val(12);
        qty = showQty[1];
        changeView(loadGridView(lstOfKind));
        $(".quantityAlert").html("About " + lstOfKind.length + " results for " + kindName + ":");
        paginationBy(lstOfKind.length);
    }
}

function getRelated(kindName) {
    var lstOfKind = [];
    ListDrink.forEach(function (drink) {
        if (drink.kind == kindName) {
            lstOfKind.push(drink);
        }
    });
    return lstOfKind;
}

function switchKind(e) {
    $(e).addClass('active');
    $(e).siblings('li').removeClass("active");
    var kindName = $(e).find('span').html();
    loadByKind(kindName);
}

//load theo trạng thái
function loadListLimit(ListDrink, begin, end) {
    var gridView = '';
    view = 0;
    end = end >= ListDrink.length ? ListDrink.length : end;

    for (var i = begin; i < end; i++) {
        var drink = ListDrink[i];
        if (i != (end - 1)) {
            gridView += '<div class="col-tn-12 col-xs-6 col-sm-4 col-md-3 col-lg-3" style="padding:0">' +
                '<figure class="item-container">' +
                '<div class="item-box">' +
                '<div class="image">' +
                '<div class="icons">' +
                '<span class="view-times">' +
                '<i class="fa fa-eye"></i>' +
                '<small>' + drink.view + 'k</small>' +
                '</span>' +
                '<div class="iconaction">' +
                '<a class="btnShare" onclick="shareFB()"> <i class="fa fa-share"></i></a>' + '<a class="btnLike"><i class=" fa fa-heart-o "></i></a>' +
                '</div>' +
                '</div>' +
                '<img src="' + drink.pathImg + '">' +
                '</div>' +
                '<figcaption>' +
                '<div class="info clearfix ">' +
                '<div class="name ">' +
                '<h4>' + drink.name + '</h4>' +
                '<hr>' +
                '<h4 class="price ">$' + drink.price.toFixed(2) + '</h4>' +
                '</div>' +
                '</div>';
            if (isLogin()) {
                var username = getUser();
                gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '&user=' + username + '">View Details</a>';
            } else {
                gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '">View Details</a>';
            }
            gridView += '<a class="add-to-cart" data-toggle="modal" data-target="#showOrder" onclick="orderDrink(this)">Order</a>' +
                '</figcaption>' +
                '</div>' +
                '</figure>' +
                '</div>';
        } else if (i == (end - 1)) {
            gridView += '<div class="col-tn-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 hidden-sm" style="padding:0">' +
                '<figure class="item-container">' +
                '<div class="item-box">' +
                '<div class="image">' +
                '<div class="icons">' +
                '<span class="view-times">' +
                '<i class="fa fa-eye"></i>' +
                '<small>' + drink.view + 'k</small>' +
                '</span>' +
                '<div class="iconaction">' +
                '<a class="btnShare" onclick="shareFB()"> <i class="fa fa-share"></i></a>' +
                '<a class="btnLike"><i class=" fa fa-heart-o "></i></a>' +
                '</div>' +
                '</div>' +
                '<img src="' + drink.pathImg + '">' +
                '</div>' +
                '<figcaption>' +
                '<div class="info clearfix ">' +
                '<div class="name ">' +
                '<h4>' + drink.name + '</h4>' +
                '<hr>' +
                '<h4 class="price ">$' + drink.price.toFixed(2) + '</h4>' +
                '</div>' +
                '</div>';
            if (isLogin()) {
                var username = getUser();
                gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '&user=' + username + '">View Details</a>';
            } else {
                gridView += '<a class="view-detail" href="detailDrink.php?drink=' + drink.name + '">View Details</a>';
            }
            gridView += '<a class="add-to-cart" data-toggle="modal" data-target="#showOrder" onclick="orderDrink(this)">Order</a>' +
                '</figcaption>' +
                '</div>' +
                '</figure>' +
                '</div>';
        }
    }
    return gridView;
}

function loadByState(e, state) {
    var lstState = [];
    ListDrink.forEach(function (drink) {
        if (drink.state == state) {
            lstState.push(drink);
        }
    });
    var content = loadListLimit(lstState, 4, 8);
    $(e).html(content);
}

function loadBestSeller() {
    var lstState = [];
    var state = "Best Sellers";
    ListDrink.forEach(function (drink) {
        if (drink.state == state) {
            lstState.push(drink);
        }
    });
    return lstState;
}

//Load dữ liệu cho menu;
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function randElement(limit, min, max) {
    var index = [];
    var af = 0;
    var id = 0;
    for (var i = 0; i < limit; i++) {
        if (i == 0) {
            id = getRandomInt(min, max);
            af = id;
            index.push(af);
        } else {
            id = getRandomInt(min, max);
            if (id == af) {
                id = getRandomInt(min, max);
                index.push(af);
            } else {
                af = id;
                index.push(af);
            }
        }
    }
    console.log("Size: " + index.length);
    index.forEach(function (it) {
        console.log(it);
    })
    return index;
}
