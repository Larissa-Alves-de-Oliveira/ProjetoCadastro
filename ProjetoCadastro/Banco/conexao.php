<?php
    $hostname = "localhost";
    $username = "hoot";
    $password = "";
    $database = "projeto1";
    $port = 3307;
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if(mysqli_connect_errno()){
        printf("erro conexão: %s\n",
        mysqli_connect_error());

        exit();
    }
?>