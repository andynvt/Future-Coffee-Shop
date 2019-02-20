<?php
    include 'connect.php';
    if(isset($_POST['signup'])){
        if($_POST['pwd'] == ($_POST['repwd'])){
            $pwd = md5($_POST['pdw']);
            $signup = "insert into users values (
            '".$_POST['name']."',
            ".$_POST['phone'].",
            '".$pwd."',
            '".$_POST['email']."',
            ".$_POST['number']."
            )";
            
            if($conn->query($signup) === TRUE){
                echo "<meta http-equiv='refresh' content='0'>";
            }
        }
     }
?>
    <link rel="stylesheet" href="css/sign-up.css">

    <form method="post" style="padding-left: 20px;padding-right:20px">
        <div class="form-group clearfix">
            <label class="col-xs-12">Name:</label>
            <input name="name" class="col-xs-12" type="text" placeholder="Name" required>
        </div>
        <div class="form-group clearfix">
            <label class="col-xs-12"><b>Mobile Phone:</b></label>
            <input name="phone" class="col-xs-12" type="tel" placeholder="Phone" data-toggle="tooltip" title="Your mobile phone will use as an User Name" required>
        </div>
        <div class="form-group clearfix">
            <label class="col-xs-12"><b>Password:</b></label>
            <input id="reset-pwd" class="col-xs-12" type="password" placeholder="Password" name="pwd" required>
        </div>
        <div class="form-group clearfix">
            <label class="col-xs-12"><b>Repeat Password:</b></label>
            <input id="reset-repwd" class="col-xs-12" type="password" placeholder="Repeat Password" name="repwd" required>
        </div>
        <div class="form-group clearfix">
            <label class="col-xs-12"><b>Email:</b></label>
            <input name="email" class="col-xs-12" type="email" placeholder="Email" required>
        </div>
        <div class="form-group clearfix">
            <label class="col-xs-12"><b>Card number:</b></label>
            <input name="number" class="col-xs-12" type="text" placeholder="Number" required>
        </div>
        <div class="sign-up-button clearfix">
            <input type="submit" class="sign-up-btn" name="signup" value="Sign up">
            <input type="reset" class="sign-up-btn" value="Reset">
        </div>
    </form>
