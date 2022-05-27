<?php

    include_once '../Admin/connection.php';

    $currentID = 1;
    $allUsedID = array();
    $noOfQuesDone = 0;

    $sql = "SELECT * FROM questions";
    $query = mysqli_query($con, $sql);

    //Total number of rows in the Table
    $noOfRows = mysqli_num_rows($query);

    //Getting max ID in the table
    $maxid = 0;
    $maxID_Query = mysqli_query($con, "SELECT MAX(id) FROM questions");
    $maxID_result = mysqli_fetch_row($maxID_Query);
    $maxid = $maxID_result[0];

    //Getting all the IDs in the database and storing them in $all_DB_ID array
    $all_ID = array();
    $result = mysqli_query($con, "SELECT id FROM questions");
    while($row = mysqli_fetch_array($result))
    {
        $all_ID[] = $row['id'];
    }

    //Marks
    function getMarks($colName){
        global $con;
        $marks_query = mysqli_query($con, "SELECT $colName FROM marks");
        $marks_result = mysqli_fetch_row($marks_query);
        return $marks_result[0];
    }
    $totalMarks = getMarks("total_marks");
    $marksPerQues = getMarks("marks_per_ques");
    $passingMarks = getMarks("passing_marks");

    function getQues(){
        global $con, $ques, $optA, $optB, $optC, $optD, $answ;

        $currentID = getRandID();
    
        $ques = someFk("question", $currentID, $con);
        $optA = someFk("A", $currentID, $con);
        $optB = someFk("B", $currentID, $con);
        $optC = someFk("C", $currentID, $con);
        $optD = someFk("D", $currentID, $con);
        $answ = someFk("answer", $currentID, $con);
    }

    function debugVar($someStr, $var){
        echo $someStr . $var;
    }

    function getRandID(){
        global $allUsedID, $all_ID, $maxid, $noOfRows;
        $newID = 0;
        if($noOfRows){
            while(true){
                $newID = rand(1, $maxid);
                if(!in_array($newID, $allUsedID) && in_array($newID, $all_ID)){
                    array_push($allUsedID, $newID);
                    return $newID;
                    break;
                }else{
                    continue;
                }
            }
        }else{
            echo "Data not found";
        }
    }
    // function changeID(){
    //     global $currentID;
    //     $currentID = getRandID();
    // }
    function someFk($col_name, $id, $con){
        $sql__ = "SELECT $col_name FROM questions WHERE id = $id";
        $query__ = mysqli_query($con, $sql__);
        while($row = mysqli_fetch_assoc($query__)) {
            return $row[$col_name];
        }
    }

    function addStdDataToDB($StdName, $StdScore){
        global $con, $passingMarks;
        $StdStatus = "Failed";
        if($StdScore>=$passingMarks) $StdStatus = "Passed";

         //sql to put value in the table
        $sql = "INSERT INTO students
        VALUES (NULL, '$StdName', $StdScore, '$StdStatus')";
 
        $query = mysqli_query($con, $sql);
 
        if(!$query){
            echo "there was an error";
        }
    }

?>