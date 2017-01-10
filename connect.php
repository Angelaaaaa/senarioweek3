<?php


    $server="localhost:8889";
    $db_username="root";
    $db_password="root";

    $con = mysql_connect($server,$db_username,$db_password);//链接数据库
    if(!$con){
        die("can't connect".mysql_error());//Error message if connection failed.
    }
    
    mysql_select_db('security',$con);//select DB, 'security' is the one i created
?>
