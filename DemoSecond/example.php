<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Demo";

    $currentID = 1;
    $allUsedID = array();
    $noOfQuesDone = 0;

    //Creating connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    echo "Connected successfully" . "\n";

    $sql = "SELECT * FROM test1";
    $query = mysqli_query($con, $sql);

    //Total number of rows in the Table
    $noOfRows = mysqli_num_rows($query);

    //Getting max ID in the table
    $maxid = 0;
    $maxID_Query = mysqli_query($con, "SELECT MAX(id) FROM test1");
    $maxID_result = mysqli_fetch_row($maxID_Query);
    $maxid = $maxID_result[0];

    //Getting all the IDs in the database and storing them in $all_DB_ID array
    $all_ID = array();
    $result = mysqli_query($con, "SELECT id FROM test1");
    while($row = mysqli_fetch_array($result))
    {
        $all_ID[] = $row['id'];
    }

    function getQues(){
        global $con;
        global $ques;
        global $optA;
        global $optB;
        global $optC;
        global $optD;
        global $answ;

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
        global $allUsedID;
        global $all_ID;
        global $maxid;
        global $noOfRows;
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
    function changeID(){
        global $currentID;
        $currentID = getRandID();
    }
    function someFk($col_name, $id, $con){
        $sql__ = "SELECT $col_name FROM test1 WHERE id = $id";
        $query__ = mysqli_query($con, $sql__);
        while($row = mysqli_fetch_assoc($query__)) {
            return $row[$col_name];
        }
    }

?>