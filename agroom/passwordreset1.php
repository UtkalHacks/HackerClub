<?php  
session_start();
 require('pwdconnect1.php');

if (isset($_POST['email']) and isset($_POST['dob'])){

$email = $_POST['email'];
$dob = $_POST['dob'];
$name = $_POST['name']

$sql = "SELECT * FROM `users` WHERE email='$email' and dob='$dob' and name='$name'";
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo $pwd;
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['email'] = $email;
}else{
$fmsg = "Invalid Login Credentials.";
}
}

if (isset($_SESSION['email'])){
$email = $_SESSION['email'];

echo "YOUR PASSWORD IS:"; echo $pwd; 
 
}else{

echo "<b>YOU ARE NOT PERMITTED</b>";
}
?>