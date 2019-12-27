<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'pro');

$ab=$_SESSION["em"];

$s = "select * from reserve where email = '$ab'";


$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);



?>

<!doctype html>
<html>

<head>
<title>Return OR ride</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
body{
  background:url(back.jpg);
  background-repeat: no-repeat;
  background-size: 1550px 721px;
}

main{
  position:absolute;
  left:600px;
  top:300px;
}
main{
  
  width:250px;
 
  color:#fff;
  font:18px Arial, sans-serif;
}


div1{
  position: absolute;
  left:350px;

}
div{
  position: absolute;
  right:350px;

}





</style>

</head>

<body>
 
<h1 style="color:white;text-align: center;font-size: 300%">Select A Category</h1>

 
<main>
 <?php
if($num == 1){
 ?>
  <div>
<p><a href="j.php"><img src="return.jpg" width="200px" height="200px"></a>
<br>
<p style="margin-left: 30px">To Return A Bike</p>
</p>

</div>
<?php
}else
{
?>

 <br>
<a href="combjoin.php">
<h2 style="color:white; text-align: right; margin-top: -240px; margin-right: -670px;">
   View My Booking History
</h2>
</a>

<br>
<br><br><br><br><br><br>
<div1>
<p><a href="city.php" ><img src="ride.jpg" width="200px" height="200px"></a>
<br>
<p style="margin-left: 30px">To Book A Bike</p>
</p>
</div1>
<?php } ?>
</main>




</body>

</html>