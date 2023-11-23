<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database_name = "php_crud";

    $con = new mysqli($server, $username, $password, $database_name);

    if($con->connect_error){
        die("CONNECTION ERROR!");
    }
    echo "";
?>