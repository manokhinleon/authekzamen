<?php
$mysql = new mysqli('copystar', 'root', '', 'copystar');
if (!$mysql) {
    error_log('Ошибка соединения: ' . $mysqli->connect_errno);
}
$mysql->set_charset("utf8");