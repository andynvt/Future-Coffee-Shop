<?php include'checklogin.php';?>

<style>
    .image-box {
        border: 1px dashed rgba(66, 103, 178, 0.4);
        border-radius: 5px
    }

    .info-box {
        padding-left: 15px;
        padding-right: 15px;
    }

    #img-order {
        height: 100px;
        margin: auto;
    }



    .list {
        z-index: 9999
    }

    .action {
        display: flex;
        justify-content: space-between
    }

    .total {
        display: flex;
        justify-content: space-between
    }

    .total label {
        font-size: 17px;
        margin: 5px 0;
        width: 70px
    }

    .total h2 {
        display: inline-block;
        margin: 2px !important
    }

    .qty {
        display: flex;
        justify-content: space-between;
        margin-right: 15px
    }

    .qty button {
        display: inline-block;
        margin-left: 8px;
        height: 34px
    }

    .action {
        margin-bottom: 25px
    }

    .confirm {
        border-top: 1px solid #e9e9e9;
        padding-top: 15px
    }

    .itemImg {
        width: 100%;
    }

</style>

<script src="js/Alert.js"></script>
<script src="js/feedback.js"></script>
<script src="js/service.js"></script>
<script src="js/cart.js"></script>
<link href="css/alert.css" rel="stylesheet">
<ul class="list">
    <li class="dropdown has-login" id="userfix" data-target="#userinfofix">
        <button class="btn btn-user"><i class="fa fa-user"></i></button>
        <ul class="dropdown-menu" id="userinfofix">
            <li><a onclick="showInfo()">View Info Personal</a></li>
            <li><a id="myBtn">Log out</a></li>
        </ul>
    </li>
    <li id="btnlogin" class="no-login"><button class="btn btn-user" data-toggle="modal" data-target="#login"><i class="fa fa-user"></i></button></li>
    <li><button class="btn btn-bag" data-toggle="modal" data-target="#shopping-bag"><i class="fa fa-shopping-cart" onclick="checkShopList()"></i><span class="badge">0</span></button>
    </li>
    <li class="has-login"><button class="btn btn-like" data-toggle="modal" data-target="#like-bag" onclick="checkWishList()"><i class="fa fa-heart"></i><span class="badge">0</span></button></li>
    <li class="no-login"><button class="btn btn-like" data-toggle="modal" data-target="#login"><i class="fa fa-heart"></i><span class="badge">0</span></button></li>

</ul>
<a class="btn btn-up"><i class="fa fa-angle-up"></i></a>
<a class="btn btn-feedback" data-toggle="modal" data-target="#feed-back"><i class="fa fa-commenting-o"></i></a>
<div id="shopping-bag" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="cart modal-content" id="cartBag">
            <div class="wrap cf modal-header">
                <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 20px; top: 18px;z-index: 9999; font-size: 36px">&times;</button>
                <ul class="list-tab">
                    <li class="active col-xs-6" data-target="#myCart">
                        <h2>Drinks Selected</h2>
                    </li>
                    <li class="col-xs-6" data-target="#serviceList">
                        <h2>Services Selected</h2>
                    </li>
                </ul>
            </div>
            <div class="tab" id="myCart">
                <div class="cart cartShop">
                    <ul class="cartWrap" id="drinkList"></ul>
                </div>
                <div class="subtotal cf">
                    <ul>
                        <hr style="margin: 5px 0">
                        <li class="totalRow">
                            <h4 id="total-price-2">Drink: $0.00</h4>
                        </li>
                        <li class="totalRow">
                            <h4 id="total-service">Service: $5.00</h4>
                        </li>
                        <li class="totalRow">
                            <h4 id="totalmoney">Total: $5.00</h4>
                        </li>
                        <hr style="margin: 5px 0">
                        <li class="totalRow col-sm-4" style="text-align: left;"><a class="btn continue" data-dismiss="modal">Continues</a></li>
                        <li class="totalRow col-sm-4" style="text-align: center;"><a class="btn gray" onclick="clearAllCart(this)">Clear All</a></li>
                        <li class="totalRow col-sm-4" style="text-align: center;"><a class="btn continue red" onclick="orderAction()">Order Now</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab" id="serviceList">
                <ul class="cartWrap">
                    <div class="item col-sm-4">
                        <figure class="item-container-short clearfix">
                            <div class="image">
                                <img src="image/karaoke-edit.png">
                                <div class="name">
                                    <h4>Karaoke</h4><span>-</span>
                                    <h4>$5.00</h4>
                                </div>
                                <a class="btnQuickView" href="service.php?">View Details</a>
                            </div>
                        </figure>
                    </div>
                </ul>
                <div class="subtotal cf">
                    <ul>
                        <hr style="margin: 5px 0">
                        <li class="totalRow">
                            <h4 id="total-price-2">Drink: $0.00</h4>
                        </li>
                        <li class="totalRow">
                            <h4 id="total-service">Service: $0.00</h4>
                        </li>
                        <li class="totalRow">
                            <h4 id="totalmoney">Total: $0.00</h4>
                        </li>
                        <hr style="margin: 5px 0">
                        <li class="totalRow col-sm-4" style="text-align: left;"><a class="btn continue" data-dismiss="modal">Continues</a></li>
                        <li class="totalRow col-sm-4 col-sm-offset-4" style="text-align: center;"><a class="btn gray" onclick="clearAllCart(this)">Clear All</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="like-bag" class="modal fade" role="dialog">
    <div class="modal-dialog" style="height:500px">
        <div class="cart modal-content" id="likeBag" style="height:500px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 20px; top: 18px;z-index: 9999; font-size: 36px">&times;</button>
                <h2 class="modal-title">Wistlist Drink</h2>
            </div>
            <div class="cart" style="height: 350px;">
                <ul class="cartWrap cartLike" style="height: 350px;"></ul>
            </div>
            <div class="modal-footer modal-footer-feed-back clearfix">
                <ul class="clearfix" style="display: flex; justify-content: space-evenly;">
                    <li class="totalRow" style="text-align: center"><a class="btn gray" onclick="clearAllCart('#likeBag')">Clear All</a></li>
                    <li class="totalRow" style="text-align: center"><a class="btn continue gray" data-dismiss="modal">Close</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="showOrder" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 20px; top: 18px;z-index: 9999; font-size: 36px">&times;</button>
                <h4 class="modal-title">Confirm</h4>
            </div>
            <div class="modal-body clearfix">
                <div class="col-xs-12 col-sm-5 image-box img-view">
                    <img class="img-responsive" src="image/hot/Americano.png " id="img-order">
                </div>
                <div class="col-xs-12 col-sm-7">
                    <div class="info">
                        <h1 id="name">Americano</h1>
                        <p id="describe">Diluted espresso.</p>
                        <a href="detailDrink.php?drink=" ++ ""></a>
                        <h2 class="price-one">$5.00</h2>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <div class="action clearfix">
                    <div class="total">
                        <label>Total:</label>
                        <h2 id="total-price">$5.00</h2>
                    </div>
                    <div class="qty">
                        <label>Quantity:</label>
                        <input class="form-control" type="text" name="qty" min="1" max="100" value="1" style="text-align: right;" onchange="checkQty()">
                        <button class="btn btnMinus" onclick="minusQty()"><i class="fa fa-minus"></i></button>
                        <button class="btn btnPlus" onclick="plusQty()"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="confirm">
                    <button class="btn red" id="btnOrder" onclick="orderAction()" data-dismiss="modal">Order Now</button>
                    <button class="btn gray" data-dismiss="modal" onclick="shopAction(this)">Add to cart</button>
                    <button class="btn btnLike" onclick="likeAction(this)">Add to Wisheslist</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="feed-back" role="dialog">
    <div class="modal-dialog modal-dialog-feed-back">
        <!-- Modal content-->
        <div class="modal-content modal-content-feed-back">
            <div class="modal-header modal-header-feed-back">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="check-star-feed-back">
                    <h2>Rate for us</h2>
                    <section class='rating-widget'>
                        <!-- Rating Stars Box -->
                        <div class="rate-feed-back">
                            <div class='rating-stars'>
                                <ul id='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                </ul>
                            </div>
                            <div class='success-box'>
                                <img class="img-feed-back" />
                                <div class="text-message"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="modal-body modal-body-feed-back">
                <div class="cmt-feed-back clearfix">
                    <div class="cmt-feed-back-1 col-sm-12">
                        <h3 id="change-feed-back">Write a review?</h3>
                        <div class="content-feed-back">
                            <textarea rows="7" placeholder="Tell us what happend?"></textarea>
                        </div>
                    </div>
                    <div class="cmt-feed-back-3 col-sm-12">
                        <h3>Something were wrong?</h3>
                        <div class="content-feed-back">
                            <textarea rows="7" placeholder="Tell us what you want us to improve!"></textarea>
                        </div>
                    </div>
                    <div class="cmt-feed-back-5 col-sm-12">
                        <h3>Expectations in future?</h3>
                        <div class="content-feed-back">
                            <textarea rows="7" placeholder="Tell us what are you expect in the future!"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer modal-footer-feed-back clearfix">
                <div class="btn-feed-back">
                    <button class="send-fb" onclick="sendfb()">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
