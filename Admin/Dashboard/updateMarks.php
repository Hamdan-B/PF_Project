<?php
    include_once '../connection.php';

    $totalMarks = $_POST['marksMax'];
    $marksPerQues = $_POST['marksPQ'];
    $passingMarks = $_POST['marksPass'];
 
    //0--totalMarks  1--marksPerQues
    $marksArr = array($totalMarks, $marksPerQues, $passingMarks);
    $colName = array("total_marks", "marks_per_ques", "passing_marks");

    for($i = 0; $i < count($colName); $i++){
            //sql to put value in the table
    $sql = "UPDATE marks SET $colName[$i]=$marksArr[$i]";
 
    $query = mysqli_query($con, $sql);
    }

     if($query){
         echo "Updated";
         header("location:dashboard.php");
     }else{
         echo "there was an error";
     }