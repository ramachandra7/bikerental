<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'pro');



$cty= $_POST['cty'];
$day=$_POST['day'];

$_SESSION['cty']=$cty;
	$_SESSION['day']=$day;






?>