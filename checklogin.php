<?php 
error_reporting(0);
$login = false;
$user="";
if($_SESSION['login'] == 1){    
    $login = true;
    $user= $_SESSION['username'];
}else { 
    $login = false ;
} 
?>
<script>
    function isLogin() {
        var login = "<?=$login?>";
        return login;
    }

    function getUser() {
        var user = '<?=$user?>';
        return user;
    }

</script>
