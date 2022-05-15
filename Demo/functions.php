<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Demo";

    //taking user Input
    $ques = $_POST['question'];
    $optA = $_POST['optA'];
    $optB = $_POST['optB'];
    $optC = $_POST['optC'];
    $optD = $_POST['optD'];
    $answ = $_POST['answer'];

    //Creating connection
    $con = new mysqli($servername, $username, $password, $dbname);
    //Checking connection
    if($con->connect_error){
        die("Connection failed: " . $con->connet_error);
    }

    //sql to put value in the table
    $sql = "INSERT INTO test1
    VALUES (NULL, '$ques', '$optA', '$optB', '$optC', '$optD', '$answ')";

    $query = mysqli_query($con, $sql);

    if($query){
        echo "Content Added";
        header("location:index.php");
    }else{
        echo "there was an error";
    }