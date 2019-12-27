<!doctype html>
<html>

<head>

<title> Bikezzap | WELCOME </title>

<style>

body {
  background: url(https://images.unsplash.com/photo-1558981806-ec527fa84c39?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}
h2{
  color:#ffcc00;
}
h2{
  position:absolute;
  bottom:170px;
  right:290px;
}
p{
  position:absolute;
  bottom:75px;
  right:85px
}
p{
  color:lightgreen;
}
p{
text-shadow: 0 0 8px #000000;
}
form{
  position:absolute;
  bottom:50px;
  right:360px;
}
div{
  position: absolute;
  top:1px;
  right:1px;
}
img{
  position: absolute;
  top:35px;
  left:35px;
}

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  left: 25px;
  font-size: 36px;
  margin-right: 50px;
}
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-right .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>

</head>

<body>

<h2 style="font-family:Comic Sans MS; font-style:italic; font-size:46px"> Welcome </h2>

<p style="font-family:cursive; font-style:italic; font-size:32px">
<br>Now experience a new standard of Life  <br>
    by booking a bike @Bikezzap.com..!!
</p>

<img src="Screenshot (9).png" "height="150" width="150">

<form style="font-family:cursive; font-style:italic; font-size:42px" action="index.php">
<input style="width: 100px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; black; -webkit-box-shadow: 6px 6px 5px black; -moz-box-shadow: 6px 6px 5px black; font-weight: bold; background: #6666ff; color: black; border-radius: 12px; border: 1px solid black; font-size: 12px;" type="submit" value="Let's Begin ->"  />
</form>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="parallax.php">ABOUT</a>
  <a href="parallax.php">WHY BIKEZZAP ?</a>
  <a href="faq.php">FAQ</a>
  <a href="parallax.php">CONTACT</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginRight = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginRight= "0";
}
</script>
</body>
</html>
