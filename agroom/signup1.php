<?php


$email=$_POST['email'];
$pwd=$_POST['pwd'];
$name=$_POST['name'];
$dob=$_POST['dob'];

echo $email;
echo $pwd;
echo $name;
echo $dob;

$conn=mysqli_connect("localhost","root","","agroom");

if($conn->connect_error)
echo "not connected";

$sql="INSERT INTO `users`(`email`,`pwd`,`name`,`dob`) VALUES ('$email','$pwd','$name','$dob')";

$conn->query($sql);

?>
