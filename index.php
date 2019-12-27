<!doctype html>
<?php
?>
<html>
<head>
<title> Bikezzap | SIGNUP </title>   
    <link rel="stylesheet" type="text/css" href="signup.css">

<style>
body {
  background: url(https://images.pexels.com/photos/1429748/pexels-photo-1429748.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500.jpg);
  background-repeat: no-repeat;
  background-size: 1550px 721px;
}
body{
  position:absolute;
  right:2px;
  top:0;
}
a{
 position:absolute;
  right:330px;
  bottom:68px;
}
p{
  position:absolute;
  right:375px;
  bottom:50px;
}
</style>
</head>
<body>


<script>
var myInput = document.getElementById("psw");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}


</script>




    <div id="login-box">



      <div class="left-box">

        <h1> Sign Up</h1>
        <form action="reg.php" method="post" onSubmit = "return checkPassword(this)">  

          
          <input type="email" name="email" placeholder="Email" required />
          <input type="password" name="password" id ="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required />
        <input type="tel" name="phoneno" placeholder="phone no" pattern="[1-9]{1}[0-9]{9}" title="Must contain ten digits and first digit should not be 0" required>
        <input type="text" name="license" minlength="18" maxlength="18" placeholder="License" required />
          <input type="submit" name="signup-button" value="Sign Up"; style="margin-bottom: 28px;
    width: 120px;
    height: 32px;
    background: #f44336;
    border: none;
    border-radius: 2px;
    color: #fff;
    font-family: sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.2s ease;
    cursor: pointer; value="Login" />
        </form>
        </div>
        <div class="right-box">
          <span class="signinwith">Sign in with<br/>Social Network     </span>
        
        <button class="social facebook">Log in with Facebook</button>    
        <button class="social twitter">Log in with Twitter</button> 
        <button class="social google">Log in with Google+</button> 
            
        
        </div>
        <div class="or">OR</div>
    </div>
    <p>Already have an account?</p>
<a href="http://localhost/project/login.php">Login</a>
</body>    
</html> 