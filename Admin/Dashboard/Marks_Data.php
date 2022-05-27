<?php
        //Connection
        include_once '../connection.php';

        function Marks_Detail($col_name){
            global $con;
            $sql__ = "SELECT $col_name FROM marks";
            $query__ = mysqli_query($con, $sql__);
            while($row = mysqli_fetch_assoc($query__)) {
                return $row[$col_name];
            }
        }