<?php
        //Connection
        include_once '../connection.php';

        $studentsTable = mysqli_query($con, "SELECT * FROM students");
        $totalStudents = mysqli_num_rows($studentsTable);
        $maxSTDid = 0;
        $maxSTDid_result = mysqli_fetch_row(mysqli_query($con, "SELECT MAX(id) FROM students"));
        $maxSTDid = $maxSTDid_result[0];
        //Getting all the IDs in the database and storing them in $all_DB_ID array
        $all_std_ID = array();
        $result = mysqli_query($con, "SELECT id FROM students");
        while($row = mysqli_fetch_array($result))
        {
            $all_std_ID[] = $row['id'];
        }

        function NoOfPassedStds(){
            global $con;
            $query = mysqli_query($con, "SELECT COUNT(score) AS total FROM students WHERE score > 50");
            $result = mysqli_fetch_assoc($query);
            return $result['total'];
        }
        function NoOfFailedStds(){
            global $con;
            $query = mysqli_query($con, "SELECT COUNT(score) AS total FROM students WHERE score < 50");
            $result = mysqli_fetch_assoc($query);
            return $result['total'];
        }
        function STD_Details($id_no, $col_name){
            global $con, $all_std_ID;
            $sql__ = "SELECT $col_name FROM students WHERE id = $all_std_ID[$id_no]";
            $query__ = mysqli_query($con, $sql__);
            while($row = mysqli_fetch_assoc($query__)) {
                return $row[$col_name];
            }
        }

        