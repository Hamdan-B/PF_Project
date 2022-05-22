<?php
    //Connection
    include_once 'connection.php';

    $sql = "SELECT * FROM `admin`";
    $query = mysqli_query($con, $sql);

    //Total number of rows in the Table
    $noOfRows = mysqli_num_rows($query);

    if($noOfRows === 0){
        header("location:Login/signup.php");
    }else{
        header("location:Login/login.php");
    }

    mysqli_close($con);