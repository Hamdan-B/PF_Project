<?php
        //MySql Server Details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "demo";

    //Creating connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    echo "Connected successfully";

    $sql = "SELECT * FROM `admin`";
    $query = mysqli_query($con, $sql);

    //Total number of rows in the Table
    $noOfRows = mysqli_num_rows($query);

    if($noOfRows === 0){
        header("location:Login/signup.php");
    }else{
        header("location:Login/index.php");
    }

    mysqli_close($con);