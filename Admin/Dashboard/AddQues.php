<?php
    include_once '../connection.php';

        //taking user Input
    $ques = $_POST['question'];
    $optA = $_POST['optA'];
    $optB = $_POST['optB'];
    $optC = $_POST['optC'];
    $optD = $_POST['optD'];
    $answ = $_POST['answer'];
     //sql to put value in the table
     $sql = "INSERT INTO questions
     VALUES (NULL, '$ques', '$optA', '$optB', '$optC', '$optD', '$answ')";
 
     $query = mysqli_query($con, $sql);
 
     if($query){
         echo "Content Added";
         header("location:dashboard.php");
     }else{
         echo "there was an error";
     }