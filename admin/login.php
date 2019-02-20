<?php 
session_start();
ob_start();
error_reporting(0);
include("connect.php");
$_SESSION['login'] = 0;
$id=$_POST['phone'];
$password= $_POST['pwd'];
$sl="select * from users where id ='".$id."' and Password='".$password."'";
$kq= $conn->query($sl);
$row= $kq->fetch_assoc();
$page = $_POST['login'];
if($kq->num_rows>0){ 
    $_SESSION['id']=$id;
    $_SESSION['password']=$password;
    $_SESSION['username']=$row['username'];
    $_SESSION['login'] = 1;
    header('location: '.$page.'?user='.$_SESSION['username'].'');
}else{
    $_SESSION['login'] = 0;
    echo "<script language='javascript'>alert('Dang nhap that bai');</script>";
    header('location: '.$page.'');
}
?>
