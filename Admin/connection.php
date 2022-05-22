<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Demo";

    //Creating connection
    $con = new mysqli($servername, $username, $password, $dbname);
    //Checking connection
    if($con->connect_error){
        die("Connection failed: " . $con->connet_error);
    }