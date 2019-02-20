<style>
    #curency {
        text-align: left
    }

    #curency a {
        text-align: left
    }

</style>
<nav class="navbar navbar-top hidden-xs">
    <div class="container">
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav menu-left">
                <?php 
                error_reporting(0);
                if($_SESSION['login']==1){
                ?>
                <li class="dropdown" data-target="#userinfo" id="usern">
                    <a>
                        <i class="fa fa-user-o"></i>
                        <strong><script>document.write(getUser())</script></strong>
                    </a>
                    <ul class="dropdown-menu" id="userinfo">
                        <li><a onclick="showInfo()">View Info Personal</a></li>
                        <li><a id="myBtn2">Log out</a></li>
                    </ul>
                </li>
                <?php  
                }else{
                ?>
                <li><a data-toggle="modal" data-target="#login">Login</a></li>
                <li><a data-toggle="modal" data-target="#signup">Register</a></li>
                <?php
                }
                ?>
            </ul>
            <!--
<ul class="navbar-nav menu-center">
    <li class="dropdown" style="display: table" data-target="#curency" id="dollar">
        <a style="display: table-cell">$ USD</a><span style="display: table-cell; color: antiquewhite"><i class="fa fa-angle-down"></i></span>
        <ul class="dropdown-menu" id="curency">
            <li><a>USD (English)</a></li>
            <li><a>VND (Vietnamese) </a></li>
        </ul>
    </li>
</ul>
-->
            <ul class="navbar-nav navbar-right menu-right">
                <li><a data-toggle="modal" data-target="#shopping-bag" class="btn-bag no-color"><i class="fa fa-shopping-cart"></i><span class="badge">0</span></a></li>
                <li class="no-login"><a data-toggle="modal" data-target="#login" class="btn-like no-color"><i class="fa fa-heart-o"></i><span class="badge">0</span></a></li>
                <li class="has-login"><a data-toggle="modal" data-target="#like-bag" class="btn-like no-color"><i class="fa fa-heart-o"></i><span class="badge">0</span></a></li>
                <li style="margin-right: 15px"><a href="#searchForm"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-center">
    <div class="container">
        <img src="image/logoWeb.png" alt="N8 Plus Future Coffee Shop">
    </div>
</nav>
<script>


</script>
