<?php

    error_reporting(1);
    ini_set("display_errors", 1);


    $connect = mysqli_connect("localhost","user1","1234","sample1");

    if(mysqli_connect_error()){
        echo "mysql 접속중 오류가 발생했습니다. ";
        echo mysqli_connect_error();
    }
?>
