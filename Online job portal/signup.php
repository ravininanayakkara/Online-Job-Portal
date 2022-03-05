
<!DOCTYPE html>
<html>
<!---header section; do not edit--->
<head>
      <script src="https://kit.fontawesome.com/350c24570c.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="styles/styles.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	  <link rel="stylesheet" type="text/css" href="styles/formsignup.css">
	  <script src="js/signup.js"></script>
      <title> SignUp - DreamJobs </title>
	  
	  <script>
	  alert("Register in here, if you haven't account!");
	  </script>
</head>

<body>
<header>
  <div class="container1">
     <h1 style="font-size:40px; font-family:courier,monospace; text-align:left; padding-left:45px; float:left;">DreamJobs <i class="fas fa-anchor"></i></h1>

     <nav>

     <ul class="menu">
     <li class="menu"><a href="DreamJobs.html">Home</a></li>
	 <li class="menu"><a href="postajob.html">Post a Job</a></li>
     <li class="menu" ><a href="findajob.html">Find a Job</a></li>
     <li class="menu"><a href="signin.html">SignIn</a></li>
	 <li class="menu"><a href="signup.html">SignUp</a></li>
	 <li class="menu"><a href="user.html">User Account</a></li>
	 <li class="menu"><a href="category.html">Category</a></li>
	 <li class="menu"><a href="submitCV.html">Submit CV</a></li>
	 <li class="menu"><a href="about.html">About</a></li>
     <li class="menu" ><a href="contactus.html">Contact Us</a></li> 
     </ul>

     </nav>
  </div>
</header>

<div>
<?php


include_once 'config.php';
if(isset($_POST['submitBtn']))
{	 
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	$address   = $_POST['address'];
	 $email = $_POST['email'];
	  $password  = $_POST['password']; 
	  
	 $sql = "INSERT INTO users (firstname,lastname,address,email,password)
	 VALUES ('$firstname','$lastname','$address','$email','$password')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
</div>

<center>
<h2>Sign Up</h2>

<form action="signup.php" method="post" onsubmit="return checkPassword()">
<div class="placeholder">
First Name: <br/>
<input class="firstname" type="text" name="firstname" placeholder="First Name" required><br/></br>
Last Name: <br/>
<input class="lastname" type="text" name="lastname" placeholder="Last Name" required><br/></br>
Email: <br/>
<input class="emailf" type="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}" required><br/><br/>
Address:<br/>
<textarea class="address" name="address" rows="5" cols="50" required></textarea><br/><br/>
Password:<br/>
<input class="password" type="password" name="password" id="pwd" pattern="(?=.+\d)(/=.+[a-z](?=.+[A-Z]){5,10}"required><br/><br/>
Re-enter Password:<br/>
<input class="reenterpassword" type="password" id="cnrmpwd" required><br/><br/>
<input  type="checkbox" id="checkbox" onclick="enableButton()">Accept privacy policy and terms.<br/><br/>
<input class="button" name="submitBtn" type="submit" id="submitBtn"  value="SignUp" disabled><br/>
</form>
</center>
<div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<!---footer section; do not edit--->
<footer>
        <div class="main-content">
          <div class="left box">
            <h2>About us</h2>
			<div class="content">
			<p>You can post jobs for free here with DreamJob.lk<br>Candidates submit your Cv and get contacted by Employers<br>Search jobs all over the Sri Lanka<br>here</p>
			<div class="social">
              <a href="https://facebook.com"><span class="fab fa-facebook-f"></span></a>
              <a href="https://twitter.com"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com"><span class="fab fa-youtube"></span></a>
            </div>
			</div>
        </div>
 <div class="center box">
	 <h3> Contact Us </h3>
	 <div class="content"
          <div class="website">
		  <span class="text">DreamJob.lk</span><br>
		  </div>
		  <div class="place">
              <br><span class="fas fa-map-marker-alt"></span>
              <span class="text">Malabe,Sri Lanka</span>
            </div>
			<div class="hotline">
              <span class="fas fa-phone-alt"></span>
              <span class="text">Hotline:(011)7894561</span>
            </div>
              <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">Email:info@DreamJob.lk</span>
            </div>
			</div>
</div>
		  <div class="bottom">
        <center>
          <span class="credit">DreamJob.lk 2021-All rights reserved-Powered by PROGECT GROUP 02 of Lab group 05 </span>
          <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
        </center>
      </div>
		</div>		
	  </footer>
</body>
</html>