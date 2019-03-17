<?php  
session_start();
 require('connect1.php');

if (isset($_POST['email']) and isset($_POST['pwd'])){

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM `users` WHERE email='$email' and pwd='$pwd'";
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

echo $count;

if ($count == 1){
$_SESSION['email'] = $email;
}else{
$fmsg = "Invalid Login Credentials.";
}
}

if (isset($_SESSION['email'])){
$email = $_SESSION['email'];

echo "<a href='farmeragr.html'>WELCOME TO AGROOM!!! CLICK HERE</a>";
 
}else{

echo "<b>YOU ARE NOT PERMITTED</b>";
}
?>