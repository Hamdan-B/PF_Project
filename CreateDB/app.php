<?php

// Create connection
$con = new mysqli("localhost", "root", "");

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to MySQL.";

// Create database
$sql = "CREATE DATABASE quizdemo";
if (mysqli_query($con, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
$con = new mysqli("localhost", "root", "", "quizdemo");
// sql to create table
$sql = "CREATE TABLE questions (
    id INT(255) AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(255) NOT NULL,
    A VARCHAR(100) NOT NULL,
    B VARCHAR(100) NOT NULL,
    C VARCHAR(100) NOT NULL,
    D VARCHAR(100) NOT NULL,
    answer VARCHAR(100) NOT NULL
    )";
    
if (mysqli_query($con, $sql)) {
    echo "Table question created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

$sql = "CREATE TABLE students (
    id INT(255) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    score INT(255) NOT NULL,
    `status` VARCHAR(50) NOT NULL
    )";
    
if (mysqli_query($con, $sql)) {
    echo "Table students created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

$sql = "CREATE TABLE marks (
    total_marks INT(100) NOT NULL,
    marks_per_ques INT(100) NOT NULL,
    passing_marks INT(100) NOT NULL
    )";
    
if (mysqli_query($con, $sql)) {
    echo "Table marks created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}
$sql = "INSERT INTO marks (total_marks, marks_per_ques, passing_marks)
VALUES (50, 10, 30)";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$sql = "CREATE TABLE `admin` (
    `name` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
    )";
    
if (mysqli_query($con, $sql)) {
    echo "Table marks created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

?>