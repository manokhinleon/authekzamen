<?php
$user=$_POST['user'];
include "connect.php";
session_start();
$sql="SELECT * FROM `users` WHERE `login`='$user[login]'";
$check=$mysql->query($sql);

if($check->num_rows>=1){
    echo 'logerror';
    return;
}

$sql="INSERT INTO `users` (`name_user`, `surname_user`, `secondname_user`, `login`, `pass`, `role`) VALUES ('$user[name]', '$user[surname]', '$user[secondname]', '$user[login]', '$user[pass_reg]', 'user')";
$mysql->query($sql);
