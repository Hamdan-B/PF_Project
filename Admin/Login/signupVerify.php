<?php
    //Connection
    include_once '../connection.php';
    //taking user Input
    $name = $_POST['name'];
    $pass = $_POST['password'];

    //sql to put value in the table
    $sql = "INSERT INTO `admin`
    VALUES ('$name', '$pass')";

    $query = mysqli_query($con, $sql);

    if($query){
        echo "Signup success";
        header("location:login.php");
    }else{
        echo "there was an error";
    }

    mysqli_close($con);