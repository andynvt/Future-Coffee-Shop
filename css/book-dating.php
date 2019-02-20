<?php
session_start();
include 'connect.php';

?>
    <!DOCTYPE html>
    <html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME | Coffee Shop</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/incluce-style.css">
        <script src="js/resCarousel.js"></script>
        <script src="js/style.js"></script>
        <script src="js/tab_action.js"></script>
        <script src="js/rangeSlider.js"></script>
        <script type="text/javascript" src="js/LoadDrink.js"></script>
        <script>
            var kind = "";
            var notNull = false;

        </script>
    </head>

    <body>
        <?php include 'cart.php'?>
        <header class="header">
            <?php include 'header-menu.php'?>
            <nav class="navbar navbar-bottom">
                <div class="container">
                    <div class="navbar-header hidden-sm hidden-md hidden-lg">
                        <button class="navbar-toggle" data-target="#main-menu" data-toggle="collapse"><i class="fa fa-navicon"></i></button>
                        <button class="navbar-toggle"><a data-toggle="modal" data-target="#searchForm"><i class="fa fa-search"></i></a></button>
                        <button class="navbar-toggle" data-toggle="modal" data-target="#shopping-bag"><i class="fa fa-shopping-cart"></i><span class="badge">0</span></button>
                        <button class="navbar-toggle" data-toggle="modal" data-target="#like-bag"><i class="fa fa-heart"></i><span class="badge">0</span></button>
                        <button class="navbar-toggle" data-target="#user" data-toggle="collapse"><i class="fa fa-user"></i></button>
                    </div>
                    <div class="navbar-collapse collapse" id="main-menu">
                        <ul class="navbar-nav">
                            <li><a href="home.php">HOME</a></li>
                            <li class="active" id="drinkLi"><a href="menu.php">MENU</a><i class="toggle-menu fa fa-plus" data-target="#sub-drink"></i>
                                <ul class="sub-menu" id="sub-drink">
                                    <script>
                                        var item = "";
                                        for (var i = 1; i < categoryItem.length; i++) {
                                            item += "<li><a href='menu.php?kind=" + categoryItem[i] + "'>" + categoryItem[i] + "</a></li>";
                                        }
                                        document.write(item);

                                    </script>
                                </ul>
                                <ul class="mega-menu">

                                    <li class="col-sm-3">
                                        <ul>
                                            <script>
                                                var item = "";
                                                for (var i = 1; i < categoryItem.length / 2; i++) {
                                                    item += "<li><a href='menu.php?kind=" + categoryItem[i] + "'>" + categoryItem[i] + "</a></li>";
                                                }
                                                document.write(item);

                                            </script>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <script>
                                                var item = "";
                                                for (var i = Math.round(categoryItem.length / 2); i < categoryItem.length; i++) {
                                                    item += "<li><a href='menu.php?kind=" + categoryItem[i] + "'>" + categoryItem[i] + "</a></li>";
                                                }
                                                document.write(item);

                                            </script>
                                        </ul>
                                    </li>
                                    <li class="col-sm-6">
                                        <div class="resCarousel" data-items="1-1-2" data-interval="3000" data-slide="1" data-animator="lazy">
                                            <div class="resCarousel-inner">
                                                <script>
                                                    var index = randElement(6, 0, ListDrink.length - 1);
                                                    var slider = "";
                                                    for (var i = 0; i < 6; i++) {
                                                        var drink = ListDrink[index[i]];
                                                        slider += '<div class="item">' +
                                                            '<figure class="item-container-short clearfix">' +
                                                            '<div class="image">' +
                                                            '<img src="' + drink.pathImg + '">' +
                                                            '<div class="name">' +
                                                            '<h4>' + drink.name + '</h4><span>-</span>' +
                                                            '<h4>$' + drink.price.toFixed(2) + '</h4>' +
                                                            '</div>' +
                                                            '<a class="btnQuickView" href="detailDrink.php?drink=' + drink.name + '&price=' + drink.price + '&describe=' + drink.describe + '&view=' + drink.view + '&kind=' + drink.kind + '&state=' + drink.state + '&pathImg=' + drink.pathImg + '">View Details</a>' +
                                                            '</div>' +
                                                            '</figure>' +
                                                            '</div>';
                                                    }
                                                    document.write(slider);

                                                </script>
                                            </div>
                                            <button class='leftRs small'>
                                                <i class="fa fa-angle-left"></i>
                                            </button>
                                            <button class='rightRs small'>
                                                <i class="fa fa-angle-right"></i>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li id="bookingLi"><a href="book-table.php">BOOKING</a><i class="toggle-menu fa fa-plus" data-target="#sub-booking"></i>
                                <ul class="sub-menu" id="sub-booking">
                                    <li><a href="">Relax</a></li>
                                    <li><a href="">Study</a></li>
                                    <li><a href="">Entertainment</a></li>
                                    <li><a href="">Dating</a></li>
                                    <li><a href="">Party</a></li>
                                    <li><a href="">For Kid</a></li>
                                </ul>
                                <ul class="mega-menu slider-item clearfix">
                                    <div class="resCarousel" data-items="1-3-3-4" data-interval="1000000" data-slide="1" data-animator="lazy">
                                        <div class="resCarousel-inner">
                                            <div class="item">
                                                <figure class="service-container">
                                                    <div class="image">
                                                        <img src="https://media.foody.vn/res/g26/252881/prof/s320x200/foody-mobile-gongcha-jpg-805-636162011618326369.jpg">
                                                        <a class="add-to-cart">Quich View</a>
                                                    </div>
                                                    <figcaption>
                                                        <h4>DATING</h4>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item">
                                                <figure class="service-container">
                                                    <div class="image">
                                                        <img src="https://media.foody.vn/res/g26/252881/prof/s320x200/foody-mobile-gongcha-jpg-805-636162011618326369.jpg">
                                                        <a class="add-to-cart">Quich View</a>
                                                    </div>
                                                    <figcaption>
                                                        <h4>STUDY</h4>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item">
                                                <figure class="service-container">
                                                    <div class="image">
                                                        <img src="https://media.foody.vn/res/g26/252881/prof/s320x200/foody-mobile-gongcha-jpg-805-636162011618326369.jpg">
                                                        <a class="add-to-cart">Quich View</a>
                                                    </div>
                                                    <figcaption>
                                                        <h4>RELAX</h4>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item">
                                                <figure class="service-container">
                                                    <div class="image">
                                                        <img src="https://media.foody.vn/res/g26/252881/prof/s320x200/foody-mobile-gongcha-jpg-805-636162011618326369.jpg">
                                                        <a class="add-to-cart">Quich View</a>
                                                    </div>
                                                    <figcaption>
                                                        <h4>ENTERTAIMENT</h4>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <button class='leftRs small'>
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                        <button class='rightRs small'>
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </div>
                                </ul>
                            </li>
                            <li id="serviceLi"><a href="service.php">SERVICE</a><i class="toggle-menu fa fa-plus" data-target="#sub-service"></i>
                                <ul class="sub-menu" id="sub-service">
                                    <li><a href="">Karaoke</a></li>
                                    <li><a href="">Watch Movies</a></li>
                                    <li><a href="">Private Mode</a></li>
                                    <li><a href="">Watch Sport Program</a></li>
                                    <li><a href="">Party</a></li>
                                    <li><a href="">For Kid</a></li>
                                </ul>
                                <ul class="mega-menu slider-item clearfix">
                                    <div class="resCarousel" data-items="1-3-3-4" data-interval="1000000" data-slide="1" data-animator="lazy">
                                        <div class="resCarousel-inner">
                                            <div class="item">
                                                <figure class="service-container">
                                                    <div class="image">
                                                        <img src="https://media.foody.vn/res/g26/252881/prof/s320x200/foody-mobile-gongcha-jpg-805-636162011618326369.jpg">
                                                        <a class="add-to-cart">Quich View</a>
                                                    </div>
                                                    <figcaption>
                                                        <h4>DATING</h4>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item">
                                                <figure class="service-container">
                                                    <div class="image">
                                                        <img src="https://media.foody.vn/res/g26/252881/prof/s320x200/foody-mobile-gongcha-jpg-805-636162011618326369.jpg">
                                                        <a class="add-to-cart">Quich View</a>
                                                    </div>
                                                    <figcaption>
                                                        <h4>STUDY</h4>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item">
                                                <figure class="service-container">
                                                    <div class="image">
                                                        <img src="https://media.foody.vn/res/g26/252881/prof/s320x200/foody-mobile-gongcha-jpg-805-636162011618326369.jpg">
                                                        <a class="add-to-cart">Quich View</a>
                                                    </div>
                                                    <figcaption>
                                                        <h4>RELAX</h4>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item">
                                                <figure class="service-container">
                                                    <div class="image">
                                                        <img src="https://media.foody.vn/res/g26/252881/prof/s320x200/foody-mobile-gongcha-jpg-805-636162011618326369.jpg">
                                                        <a class="add-to-cart">Quich View</a>
                                                    </div>
                                                    <figcaption>
                                                        <h4>ENTERTAIMENT</h4>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <button class='leftRs small'>
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                        <button class='rightRs small'>
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#searchForm"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="searchForm">
                <button type="button" class="close">×</button>
                <form>
                    <input type="text" value="" placeholder="type drink name, atmosphere here" id="myInput" />
                    <button type="submit" class="btn btn-primary">Search</button>
                    <div class="resultSearch"></div>
                </form>
            </div>
            <div class="navbar-background"></div>
        </header>

        <div id="booked" class="modal-cs">
            <div class="modal-dialog" style="margin:150px auto; text-align: center; width: 400px">
                <div class="modal-content clearfix">
                    <div class="modal-header">
                        <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="booked-info">
                            Table: <b>DT01</b><br>Date: <b>November 19th, 2017</b><br>Time: <b>18:00</b><br>
                        </div>
                        <div class="booked-thanks">
                            Thanks for using our services.<br> Please come to us on time to receive the best service. <br>Have a nice day!
                        </div>
                        <br>
                        <button type="button" class="btn btn-default" data-dismiss="modal">I got it</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="logout" class="modal-cs">
            <div class="modal-dialog" style="margin:150px auto; text-align: center; width: 350px">
                <div class="modal-content clearfix">
                    <div class="modal-header">
                        <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Logout</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="logout.php?page=book-dating.php">
                            <p>Do want to logout your account?</p><br>
                            <input class="btn" type="submit" name="logout" value="Logout">
                            <input class="btn" type="reset" name="cancel" value="Cancel">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog" style="margin-top:150px; width: 452px;">
                <div class="modal-content clearfix">
                    <div class="modal-header">
                        <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> Login</h4>
                    </div>
                    <div class="main_login clearfix">
                        <ul class="tabs">
                            <li data-target="#tab1">Account</li>
                            <li data-target="#tab2">QR Code</li>
                        </ul>
                        <div class="tab_container">
                            <div class="tab_content" id="tab1">
                                <form method="POST" action="login.php">
                                    <div class="phone-number">
                                        <span>    <i class="fa fa-mobile"></i></span>
                                        <select name="first-num">
                                            <option>
                                                +84<span>    Vietnam</span>
                                            </option>
                                            <option>
                                                +61<span>    Australia</span>
                                            </option>                        <option>
                                            +55<span>    Brazil</span>
                                            </option>
                                            <option>
                                                +86<span>    China</span>
                                            </option>
                                            <option>
                                                +33<span>    France</span>
                                            </option>
                                            <option>
                                                +49<span>    Germany</span>
                                            </option>
                                            <option>
                                                +62<span>    Indonesia</span>
                                            </option>
                                            <option>
                                                +81<span>    Japan</span>
                                            </option>
                                            <option>
                                                +82<span>    South Korea</span>
                                            </option>
                                            <option>
                                                +64<span>    New Zealand</span>
                                            </option>
                                            <option>
                                                <span>&nbsp;</span>+7 <span>Russian</span>
                                            </option>
                                            <option>
                                                +34<span>    Spain</span>
                                            </option>
                                            <option>
                                                +44<span>    United Kingdom</span>
                                            </option>
                                            <option>
                                                <span>&nbsp;</span>+1 <span>United States</span>
                                            </option>
                                        </select>
                                        <input placeholder="Your phone number" type="tel" name="phone">
                                    </div>
                                    <div class="password">
                                        <span>    <i class="fa fa-lock"></i></span>
                                        <input placeholder="Your password" type="password" name="pwd">
                                    </div>
                                    <button type="submit" name="login" value="book-dating.php">Login</button>
                                </form>
                                <div class="link_sign_up">You don't have an account yet , <a style="text-decoration:none">Register</a> now!</div>
                            </div>
                            <div class="tab_content" id="tab2">
                                <table cellpadding="10" align="center" border="0">
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <div class="qrcode">
                                            <img src="image/qr-code.png" alt="QR Code" style="width: 224px; height:224px;">
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="scan-qrcode">Scan QR code to log in</div>
                                    </tr>
                                    <tr>
                                        <div class="link_sign_up">You don't have an account yet, <a href="n8plus.com" style="text-decoration:none">Register </a> now!</div>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="signup" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> Shopping Bag</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="action">
                            <a class="button ripple" data-toggle="modal" data-target="#shopping-bag">Continous Order</a>
                            <p>Total: $1243</p>
                            <a class="button ripple" id="checkOutBtn">Check out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper" id="andy">
            <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <b>Choose Space:</b>
                        <select onchange="window.location=this.options[this.selectedIndex].value " class="cbb ">
                            <option value="# ">Relax</option>
                            <option value="# ">Study</option>
                            <option value="# ">Entertainment</option>
                            <option value="# " selected>Dating</option>
                            <option value="# ">Party</option>
                            <option value="# ">For Kid</option>
                        </select>
                    </div>
                    <div class="collapse navbar-collapse " id="bs-sidebar-navbar-collapse-1 ">
                        <ul class="nav navbar-nav ">
                            <li><a href="# "><b>Choose Space</b></a></li>
                            <li><a href="# ">Relax<span style="font-size:20px; " class="pull-right hidden-xs showopacity glyphicon glyphicon-music "></span></a></li>
                            <li><a href="# ">Study<span style="font-size:20px; " class="pull-right hidden-xs showopacity glyphicon glyphicon-book "></span></a></li>
                            <li><a href="# ">Entertainment<span style="font-size:20px; " class="pull-right hidden-xs showopacity glyphicon glyphicon-film "></span></a></li>
                            <li class="active "><a href="#">Dating<span style="font-size:20px; " class="pull-right hidden-xs showopacity glyphicon glyphicon-heart "></span></a></li>
                            <li><a href="# ">Party<span style="font-size:20px; " class="pull-right hidden-xs showopacity glyphicon glyphicon-glass "></span></a></li>
                            <li><a href="# ">For Kid<span style="font-size:20px; " class="pull-right hidden-xs showopacity glyphicon glyphicon-gift "></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <br>
            <div class="wellcome ">
                <br><br>
                <h2>Sweet dating!</h2>
                <h4>Choose position: </h4><br>
            </div>

            <div class="main-content">
                <div class="row note ">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 note-div ">
                        <img class="note-icon choice" src="image/table/dating3.png">
                        <div class="note-text "><b>Your choice</b></div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 note-div ">
                        <img class="note-icon " src="image/table/dating3.png ">
                        <div class="note-text "><b>Empty table</b></div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 note-div ">
                        <img class="note-icon booked" src="image/table/dating3.png">
                        <div class="note-text "><b>Booked table</b></div>
                    </div>
                </div>

                <hr>
                <div class="row ">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table " src="image/table/dating1.png">
                            <div class="table-name ">DT01</div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table " src="image/table/dating3.png">
                            <div class="table-name ">DT02</div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table booked" src="image/table/dating3.png">
                            <div class=" table-name ">DT03</div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table " src="image/table/dating1.png ">
                            <div class="table-name ">DT04</div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table booked" src="image/table/dating2.png ">
                            <div class="table-name ">DT05</div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table " src="image/table/dating2.png ">
                            <div class="table-name ">DT06</div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table booked" src="image/table/dating1.png ">
                            <div class="table-name ">DT07</div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table " src="image/table/dating4.png ">
                            <div class="table-name ">DT08</div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table " src="image/table/dating4.png ">
                            <div class="table-name ">DT09</div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table " src="image/table/dating1.png ">
                            <div class="table-name ">DT10</div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table booked" src="image/table/dating5.png ">
                            <div class="table-name ">DT11</div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="div-pic-table ">
                            <img class="pic-table " src="image/table/dating5.png ">
                            <div class="table-name ">DT12</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="book-date">
                    <div class="book-date-date">Date: <input type="date"></div>
                    <div class="book-date-time">Time: <input type="time"></div>

                </div>
                <hr>
            </div>
            <div class="btn-sp ">
                <script>
                    if (isLogin() == 1) { <
                        button class = "button-sp"
                        data - toggle = "modal"
                        data - target = "#booked" > Book < /button>
                    } else { <
                        button class = "button-sp"
                        data - toggle = "modal"
                        data - target = "#login" > Book < /button>
                    }

                </script>
                <!--
<?php 
                error_reporting(0);
                if($_SESSION['login']==1){

                ?> <button class="button-sp" data-toggle="modal" data-target="#booked">Book</button>
<?php  
                }else{
                ?>
<button class="button-sp" data-toggle="modal" data-target="#login">Book</button>
<?php
                }
                ?>
-->
                <button class="button-sp" id="resetBook">Reset</button>
            </div>
            <br>
        </div>
        <?php include'footer.php';?>
    </body>
    <script src="js/book-table.js"></script>
    <script src="js/search.js"></script>
    <script src="js/pin.js"></script>
    <script src="js/process.js"></script>
    <script>
        $("nav.sidebar").fixedMenu($('.header').outerHeight());

    </script>

    </html>
