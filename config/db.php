<?php

/* 
* инициализация подключения к БД
 */

$dblocation = "localhost";
$dbname = "Uletaem";
$dbuser = "root";
$dbpassword = "";

// соединяемся с БД
$db = mysqli_connect ($dblocation, $dbuser, $dbpassword);
if (! $db){
    echo 'ошибка подключения к БД';
    exit();
}

 mysqli_set_charset ($db, 'utf8');
if ( ! mysqli_select_db($db, $dbname) ){
    echo "ошибка доступа к БД {$dbname}";
    exit();
}
