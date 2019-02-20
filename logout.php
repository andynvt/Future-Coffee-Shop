<?php 
session_start();
ob_start();
if(isset($_POST['logout'])){
    session_destroy();
    $_SESSION['login'] = 0;    
    header("location:".$_GET['page']."");
}
?>
