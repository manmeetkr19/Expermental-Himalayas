<?php

session_start();

$con  = mysqli_connect('localhost','root',''); 

mysqli_select_db($con,'userinfo');

$fname= $_POST['firstname'];
$lname= $_POST['lastname'];
$people=$_POST['num'];
$phone=$_POST['phone'];
$package=$_POST['pack'];
$sql = "INSERT INTO booking (firstname,lastname,people, phonenumber,package)
VALUES ('$fname', '$lname', '$people', '$phone','$package')";
$rs = mysqli_query($con, $sql);
if($rs)
{
echo "Booking done";
}
if ($con->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


?>