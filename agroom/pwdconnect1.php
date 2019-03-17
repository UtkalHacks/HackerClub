<?php
$conn = mysqli_connect("localhost", "root", "" , "agroom");
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
    echo "error";
}
$select_db = mysqli_select_db($conn, 'agroom');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}
?>