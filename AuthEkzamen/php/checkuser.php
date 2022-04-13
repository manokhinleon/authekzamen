<?php
session_start();
require_once "connect.php";
$login=$_POST['login'];
$pass=$_POST['pass'];
$sql="SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'";
$count=$mysql->query($sql);
$user=$count->fetch_assoc();
if (isset($user) == false) {
    echo "404";
    exit();
}
$_SESSION['user']=$user;
header("Location:$_SERVER[HTTP_REFERER]");
$mysql->close();