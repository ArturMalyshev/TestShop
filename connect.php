<?php
    $host='localhost';
    $user='root';
    $pass='pass';
    $database='main';

    $link=new mysqli($host,$user,$pass,$database);
    if($link -> connect_errno){
        echo'проблема с БД';
    }
    else{
        //echo'норм бд ! ';
        $link -> set_charset("utf8");
    }
?>

