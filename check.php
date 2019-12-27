<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'pro');


?>

<!DOCTYPE html>
<html>
   <style>
     
      h1 { 
      color:black;
      }
      label {
      margin-bottom: 10px;
      display: block;
      }
      html { 
  background: url(check.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

p{
   text-align: center;
}
   </style>
   <body style="background-repeat:no-repeat;background-size:1400px 700px;">
      <div style="background-color: rgba(0,0,0,0.8); color: white; width: 40%; position: relative; margin:0 auto; margin-top: 200px">
         <h1 style="color: aqua;text-align: center ">
         BOOKING DETAILS</h1>

         <p>Email : <?php echo $_SESSION["em"]; ?></p>
         <p>Day : <?php echo $_SESSION["day"]; ?></p>
         <p>City : <?php echo $_SESSION["cty"]; ?></p>
         <p>Bike Model: <?php echo $_SESSION["p"];?></p>
         <p>Cost: <?php echo $_SESSION["q"]; ?></p>
      </div>
      <form action="welcome2.php" method="post">
<input type ="submit" name="logout" value="logout" style="margin-left:700px;">
</form>
   </body>
</html>