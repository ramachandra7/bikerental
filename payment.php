<?php
session_start();

if(isset($_POST['pay']))
{
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'pro');
$bid = isset($_GET['bid']) ? $_GET['bid'] : '';
$_SESSION['bid']=$bid;
$s = "SELECT name from veh where id = '$bid'";

$res=mysqli_query($con,$s);
$r=mysqli_fetch_assoc($res);
$r = $r['name'];
$s1 = "SELECT cost from veh where id = '$bid'";

$res1=mysqli_query($con,$s1);

$r1=mysqli_fetch_assoc($res1);
$r1 = $r1['cost'];
$_SESSION['p']=$r;
$_SESSION['q']=$r1;
$c=$_SESSION["day"];
$b=$_SESSION["cty"];
$a=$_SESSION["em"];

$reg1="INSERT INTO `reserve`(`email`, `city`, `date`, `bid`) VALUES ('$a','$b','$c','$bid')";
mysqli_query($con,$reg1);


$reg11="INSERT INTO `combo`(`email`, `city`, `date`, `bid`) VALUES ('$a','$b','$c','$bid')";
mysqli_query($con,$reg11);

$reg7="INSERT INTO `allreserve`(`email`, `city`, `date`, `bid`, `cost`) VALUES ('$a','$b','$c','$bid','$r1')";
mysqli_query($con,$reg7);

$u=$_POST['cardname'];
$v=$_POST['cno'];
$w=$_POST['expmonth'];
$x=$_POST['expyear'];




$reg2="INSERT INTO `paym`(`email`, `cname`, `cno`, `expmonth`, `expyear`) VALUES ('$a','$u','$v','$w','$x')";
mysqli_query($con,$reg2);



header( "refresh:0;url=check.php" );
}



 

?>
<!DOCTYPE html>
<html>
<head><title>Bikezzap | PAYMENT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background:url(https://cdn.hipwallpaper.com/i/2/63/dx9cwg.jpg);
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  position:absolute;
  right:390px;
}
div1{
   position:absolute;
  left:200px;
}
label{
  font-family:cursive;
 }

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background:rgba(0, 0, 0, 0.3);
  background-size:cover;
  padding:7px;
  width:670px;
  height:620px;
  border: 1px solid gray;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=tel] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=password] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=number] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: deepSkyBlue;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 35%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: DarkBlue;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post">
      
        <div class="row">
       

          <div class="col-50">
            <h2 style="font-family:cursive;"> Card Details</h2>
            <label style="font-size:22px;" for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-paypal" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:re;"></i>
             
            </div>
              
        
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" value="<?php  

$con = mysqli_connect('localhost','root','','pro');
$z=$_SESSION["em"];
            $s3 = "select * from paym where email = '$z'";
  $res3=mysqli_query($con,$s3);

$r3=mysqli_fetch_assoc($res3);
$r3 = $r3['cname'];
echo $r3;
 ?>"placeholder="Name On Card">

            <label for="ccnum">Credit card number</label>
            <input type="tel" name="cno" placeholder="1111222233334444" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" value="<?php  

$con = mysqli_connect('localhost','root','','pro');
$z=$_SESSION["em"];
            $s3 = "select * from paym where email = '$z'";
  $res3=mysqli_query($con,$s3);

$r3=mysqli_fetch_assoc($res3);
$r3 = $r3['cno'];
echo $r3;
?>" required>

                <label for="cvv">CVV</label>
               <input type="password" name="cvv" placeholder="***" pattern="[0-9][0-9][0-9]" required>

                        <div class="row">
             <div class="col-50">
                <label for="expmonth">Exp MM/YYYY</label>
           <input type="number" name="expmonth" min="1" max="12" placeholder="MM" value="<?php  

$con = mysqli_connect('localhost','root','','pro');
$z=$_SESSION["em"];
            $s3 = "select * from paym where email = '$z'";
  $res3=mysqli_query($con,$s3);

$r3=mysqli_fetch_assoc($res3);
$r3 = $r3['expmonth'];
echo $r3;
?>">

 
              </div>


              <div class="col-50">
                <label for="expyear"><br></label>
                 <input type="number" name="expyear" min="2019" max="2100" placeholder="YYYY" value="<?php  

$con = mysqli_connect('localhost','root','','pro');
$z=$_SESSION["em"];
            $s3 = "select * from paym where email = '$z'";
  $res3=mysqli_query($con,$s3);

$r3=mysqli_fetch_assoc($res3);
$r3 = $r3['expyear'];
echo $r3;
?>">

              </div>

            </div>
              </div>
          
        </div>
<div class="div1">
       <input type="submit"; style="width: 250px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; black; -webkit-box-shadow: 6px 6px 5px black; -moz-box-shadow: 6px 6px 5px black; font-weight: bold; background: skyblue; color: black; border-radius: 12px; border: 1px solid black; font-size: 12px;" value="Continue to Pay" name="pay" >
    </div>
 </form>
    </div>
  </div>
 
</div>

</body>
</html>
