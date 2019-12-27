<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'pro');


$em= $_POST['em'];
$pswd=$_POST['pswd'];



$s = "select * from sign where email = '$em' and password = '$pswd'";


$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num == 1){
	$_SESSION['email']=$em;
$_SESSION['em']=$em;
header( "refresh:0;url=inter.php" );
}else{
$message="Invalid Credential";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:0;url=login.php" );



}



?>