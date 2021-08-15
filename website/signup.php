<?php

session_start();

$con  = mysqli_connect('localhost','root',''); 

mysqli_select_db($con,'userinfo');

$name= $_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
$s="select * from credentials where username='$name'";
$result= mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
    echo "username already taken";
}else{
    $reg= "insert into credentials(username, password, email) values('$name','$pass','$email')";
    mysqli_query($con,$reg);
    echo "registration success";
}

?>