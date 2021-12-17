<?php
    $host='localhost';
    $user='ashakirova_ashop';
    $pass='tG%N75WN';
    $database='ashakirova_ashop';

    $link = new mysqli($host, $user, $pass, $database);
    if($link -> connect_errno){
        echo'проблема с БД';
    }
    else{
        //echo 'норм бд !';
        $link -> set_charset("utf8");
    }
?>