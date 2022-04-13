<?php
require_once "php/connect.php";
$sql="SELECT * FROM `receptions` WHERE `total`!='Здоров' AND `total`!='waiting'";
$num_bol=$mysql->query($sql)->num_rows;

session_start();
$user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CopyStar</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header>
    <div class="container">
        <div class="header__inner">
            <a href="/"><h1>CopyStar</h1></a>
            <div class="menu">
                <ul>   
                    <?php
                    if(isset($user)){
                    ?>
                    <li><a href="cabinet.php" >Личный кабинет</a></li>
                    <li><a href="php/exit.php">Выход</a></li>
                    <?php
                        }else{
                    ?>
                    <li><a href="#" id="open_sign">Войти</a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            
        </div>
        
    </div>
    <div class="popup" id="sign_popup">
            <div class="popup__container">
                <div class="popup_body">
                    <form action="php/checkuser.php" method="post" id="check__user">
                        <h1>Вход</h1>
                        <input type="text" placeholder="Логин" name="login" id="login" class="popup__input">
                        <input type="password" placeholder="Пароль" name="pass" id="pass" class="popup__input">
                        <br>
                        <input type="submit" value="Войти" class="subbtn" id="">
                        <br>
                        <h4 class="error_sign"></h4>
                        <h3 class="popup__close">&#10006</h3>
                        <a href="reguser.php" id="reg_open">Зарегистрироваться</a>
                    </form>                          
                </div>
            </div>
    </div>
</header>    
