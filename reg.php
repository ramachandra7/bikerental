<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'pro');

$email= $_POST['email'];
$password=$_POST['password'];
$phoneno=$_POST['phoneno'];
$license=$_POST['license'];

$_SESSION['em']=$email;
$s = "select * from sign where email = '$email'";

$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num == 1){
	
header( "refresh:0;url=index.php" );
}else

{

$reg="insert into sign(email,password,phoneno,license) values('$email','$password','$phoneno','$license')";
mysqli_query($con,$reg);

header( "refresh:0;url=city.php" );
}






?>