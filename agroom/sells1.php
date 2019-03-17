<?php


$sellername=$_POST['sellername'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$cropname=$_POST['cropname'];
$location=$_POST['location'];
$contactno=$_POST['contactno'];

echo $sellername;
echo $quantity;
echo $price;
echo $cropname;
echo $location;
echo $contactno;


$conn=mysqli_connect("localhost","root","","agroom");

if($conn->connect_error)
echo "not connected";

$sql="INSERT INTO `items`(`sellername`,`quantity`,`price`,`cropname`,`location`,`contactno`) VALUES ('$sellername','$cropname','$quantity','$price','$location','$contactno')";

$conn->query($sql);

?>
