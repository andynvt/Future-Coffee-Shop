<script>
    var sub_failed = new Alert('sub-failed', 'You must enter your email.', 2000);
    var sub_success = new Alert('sub-success', 'Thanks for your subcribe!', 2000);
    var sub_not_valid = new Alert('sub-not-valid', 'Please provide a valid email address!', 2000);

    function subscribe(e) {
        var email = $(e).prev('input').val();
        if (email == '') {
            sub_failed.showAlert();
        } else {
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (filter.test(email)) {
                sub_success.showAlert();
            } else {
                sub_not_valid.showAlert();
            }
        }
    }

</script>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div style="text-align:center" class="col-xs-12 col-sm-2">
                    <a href="index.html">
                        <img width="100" src="image/logoWeb.png" alt="logo">
                    </a>
                </div>
                <address class="col-xs-12 col-sm-10">
                    <p class="col-tn-12 col-xs-4 col-sm-4" style="display: flex">
                    <i class="fa fa-map-marker" style="min-width:36px"></i><span>113, 3/2, Nink Kieu, Can Tho, Viet Nam</span></p>
                    <p class="col-tn-12 col-xs-4 col-sm-4" style="display: flex">
                        <i class="fa fa-mobile" style="min-width:36px"></i><span>+ (84) 914 852 382</span> </p>
                    <p class="col-tn-12 col-xs-4 col-sm-4" style="display: flex">
                        <i class="fa fa-envelope" style="min-width:36px"></i><span><a href="mailto:n8plus@gmail.com">n8plus@gmail.com</a></span></p>
                </address>
            </div>
        </div>
    </div>
    <script>


    </script>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-4 col-md-3">
                    <div class="footer-links">
                        <h5><a>Menu</a></h5>
                        <ul class="links">
                            <li><a href="detailDrink.php?kind=">Hot Coffee</a></li>
                            <li><a href="#">Ice Coffee</a></li>
                            <li><a href="#">Fruits</a></li>
                            <li><a href="#">Soft Drink</a></li>
                            <li><a href="#">Other</a></li>
                            <li><a href="#">Order history</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4 col-md-2">
                    <div class="footer-links">
                        <h5><a>Table</a></h5>
                        <ul class="links">
                            <li><a href="book-relax.php">Relax</a></li>
                            <li><a href="book-study.php">Study</a></li>
                            <li><a href="book-entertainment.php">Entertaiment</a></li>
                            <li><a href="book-dating.php">Dating</a></li>
                            <li><a href="book-party.php">Party</a></li>
                            <li><a href="book-kid.php">For Kid</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4 col-md-3">
                    <div class="footer-links">
                        <h5><a>Service</a></h5>
                        <ul class="links">
                            <li><a href="">Karaoke</a></li>
                            <li><a href="">Watch Movies</a></li>
                            <li><a href="">Watch Sport</a></li>
                            <li><a href="#">Private Mode</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="footer-newsletter">
                        <h5>Subscribe to our news</h5>
                        <form>
                            <div class="newsletter-inner">
                                <p>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</p>
                                <div class="subscribe-text">
                                    <input class="newsletter-email" name="Email" placeholder="Enter Your Email" id="text-sub">
                                    <button class="button subscribe" type="button" title="Subscribe" onclick="subscribe(this)">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="social">
                        <h5 style="margin-bottom:10px">Follow Us</h5>
                        <ul class="inline-mode">
                            <li class="social-network fb"><a title="Connect us on Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-network googleplus"><a title="Connect us on Google+" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="social-network tw"><a title="Connect us on Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-network instagram"><a title="Connect us on Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="copyright">
        <div class="col-xs-12 coppyright">Copyright © 2017 <a href="#"> N8+ Future Coffee Shop </a>. All Rights Reserved. </div>
    </div>
</footer>
