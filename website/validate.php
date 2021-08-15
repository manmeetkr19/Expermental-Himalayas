<?php

session_start();

$con  = mysqli_connect('localhost','root',''); 

mysqli_select_db($con,'userinfo');

$name= $_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
$s="select * from credentials where username='$name' && password='$pass'";
$result= mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
   header('location:index.html');
}else{
   echo "Wrong Credentials";
   header('location:login.php');
}

?>