<?php
    include_once '../connection.php';

        //taking user Input
    $ques = addslashes($_POST['question']);
    $optA = addslashes($_POST['optA']);
    $optB = addslashes($_POST['optB']);
    $optC = addslashes($_POST['optC']);
    $optD = addslashes($_POST['optD']);
    $answ = addslashes($_POST['answer']);



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