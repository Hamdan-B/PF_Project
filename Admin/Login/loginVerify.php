<?php
    //Connection
    include_once '../connection.php';

    $login_sql = "SELECT `password` FROM `admin`";
    $login_query = mysqli_query($con, $login_sql);
    $DB_pass = mysqli_fetch_array($login_query)['password'];

    if(isset($_POST['password'])){
        if($_POST['password'] === $DB_pass){
            session_start();
            $_SESSION['userlogin'] = 1;
    
            header('location:../Dashboard/dashboard.php');
        }else{
            header('location:login.php?err=1');
        }

    }else{
        echo "no password found";
    }
