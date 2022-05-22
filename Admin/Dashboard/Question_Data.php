<?php
        //Connection
        include_once '../connection.php';

        $questionTable = mysqli_query($con, "SELECT * FROM questions");
        $totalQuestions = mysqli_num_rows($questionTable);
        $max_ques_id = 0;
        $max_ques_id_result = mysqli_fetch_row(mysqli_query($con, "SELECT MAX(id) FROM questions"));
        $max_ques_id = $max_ques_id_result[0];
        //Getting all the IDs in the database and storing them in $all_DB_ID array
        $all_ques_ID = array();
        $result = mysqli_query($con, "SELECT id FROM questions");
        while($row = mysqli_fetch_array($result))
        {
            $all_ques_ID[] = $row['id'];
        }

        function Ques_Details($id_no, $col_name){
            global $con;
            global $all_ques_ID;
            $sql__ = "SELECT $col_name FROM questions WHERE id = $all_ques_ID[$id_no]";
            $query__ = mysqli_query($con, $sql__);
            while($row = mysqli_fetch_assoc($query__)) {
                return $row[$col_name];
            }
        }
        function DropQues($cur_id){
            global $con;
            $DropSQL = "DELETE FROM questions WHERE id=$cur_id;";
            $DropQuery = mysqli_query($con, $DropSQL);
            header("location:dashboard.php");
        }
