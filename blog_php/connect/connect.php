<?php
    $host = "localhost";
    $user = "dbwls8751";
    $pw = "why49148751!!";
    $db = "dbwls8751";

    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "DATABASE Connect False";
    // } else {
    //     echo "DATABASE Connect True";
    // }
?>