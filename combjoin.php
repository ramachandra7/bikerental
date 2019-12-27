<!doctype html>
<html>

<head>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
 
}
body {
  background: url(bb.jpg);
  background-repeat: no-repeat;
  background-size: 1550px 721px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


</style>
</head>

<body>
<br>
<br><br>
<h1 style="text-align: center">Booking History</h1>

<table class="mid" align="center">
<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'pro');


$ab=$_SESSION["em"];

$s = "SELECT email, city, date ,two.name, two.cost
  FROM allreserve as one JOIN veh as two
    ON one.bid = two.id and email = '$ab'";



$res=mysqli_query($con,$s);


while($rows=mysqli_fetch_assoc($res))
{

	?>

<tr>

<td>
<?php
echo $rows["city"]; 
?>
</td>
<td>
<?php
echo $rows["date"]; 
?>
</td>
<td>
<?php
echo $rows["name"]; 
?>
</td>
<td>
<?php
echo $rows["cost"]; 
?>
</td>
</tr>

<br>
<?php
}








?>

</table>

<?php

$s2 = "Select * from allreserve where email ='$ab'";


$res=mysqli_query($con,$s2);
$n=mysqli_num_rows($res);





?>

<h2 align="center">No Of Previous Bookings : <?php echo $n;?> </h2>







<form style="font-family:cursive; font-style:italic; font-size:42px" action="city.php" align="center">
<input style="width: 100px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; black; -webkit-box-shadow: 6px 6px 5px black; -moz-box-shadow: 6px 6px 5px black; font-weight: bold; background: #6666ff; color: black; border-radius: 12px; border: 1px solid black; font-size: 12px;" type="submit" value="Let's Ride>"  />
</form>

</body>

</html>