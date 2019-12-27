<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'pro');





if(isset($_POST['sub']))
{
  $cty= $_POST['cty'];
$day=$_POST['day'];

$_SESSION['cty']=$cty;
$_SESSION['day']=$day;

?>
<div>
<p><a href="spec1.php"><img src="Screenshot (14).png"></a></p>
</div>

<div1>
<p><a href="ec1.php"><img src="Screenshot (15).png"></a></p>
</div1>
<?php
}
?>




<!doctype html>
<html>

<head>
<title>Bikezzap | SELECTION</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
body{
  background:url(osman-rana-DHMlx0Osvg8-unsplash.jpg);
  background-repeat: no-repeat;
  background-size: 1550px 721px;
}

main{
  position:absolute;
  left:600px;
  top:120px;
}
main{
  
  width:250px;
 
  color:#fff;
  font:18px Arial, sans-serif;
}
select {
  min-width: 10em;
  padding: 0.5em 1em;
  background: transparent;
  border: #444 solid;
  border-radius: 1em;
  color: orange;
  font: inherit;
}
.fixed option {
  background: black;
}
select.solid {
  background: black;
}
body {
  min-height: 100vh;
  color: black;
  font-family: sans-serif;
}
div1{
  position: absolute;
  left:350px;
top:300px;
}
div{
  position: absolute;
  right:350px;
top:300px;
}
main {
  display: flex;
}
@media (max-width: 40em) {
  main {
    flex-wrap: wrap;
  }  
}

select {
  display: block;
  margin-top: auto;
}
option {
  font: inherit;
}



</style>

</head>

<body>

<main>
  <figure style="margin-left:-100px ; margin-right: 100px">
    <form method="post" action="">
  <select class="solid" name="cty" required>
    <option>Bengaluru</option>
    <option>Chandigarh</option>
    <option>Chennai</option>
    <option>Delhi</option>
    <option>Guntur</option>
    <option>Hyderabad</option>
    <option>Mumbai</option>
    <option>Pune</option>
    <option>Puducherry</option>
    <option>Visakhapatnam</option>
    <option>Vijayawada</option>
  </select>

<br>
  <input type="date"  min="<?php echo date("Y-m-d"); ?>" name="day" class ="solid" style="margin-left: 20px" required>


<br>
<input type="submit" style="width: 100px;  cursor: pointer; box-shadow: 6px 6px 5px; black; -webkit-box-shadow: 6px 6px 5px black; -moz-box-shadow: 6px 6px 5px black; font-weight: bold; background: #6666ff; color: black; border-radius: 12px; border: 1px solid black; font-size: 16 px;margin-top: 20px; margin-left: 40px" name="sub"  >
</figure>
</form>
</main>




</body>

</html>