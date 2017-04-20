<?php


$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_DATABASE = 'Database-4'; //DB Name here
//Connect to mysql server
$con = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD );

if(!$con) {
die('Failed to connect to server: ' . mysql_error());
}
//Select database
$db = mysql_select_db($DB_DATABASE , $con);
if(!$db) {
die("Unable to select database");
} 
	session_start();
if (isset($_POST['submit'])){
$username = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$birthDate = $_POST['date'];
$password = $_POST['password'];
$password2 = $_POST['psw-repeat'];

if($password == $password2 ){

$password = md5($password ); // hash password 
$sql = "INSERT INTO `BloodBank` (`email`, `password`, `phone`, `address`, `name`)  VALUES ('$email','$password','$phone', '$address','$username')";
$result = mysql_query($sql);
if($result){
	echo "Account Successfully created";
}else {
	die(mysql_error());
}

//$_SESSION['message'] = "Registered Succfully";
//$_SESSION['username'] = $username;

header("Location: index.php");

}else{

$_SESSION['message'] = "The Two password do not match";
  echo "The Two password do not match";

}//end else



}
mysql_close($con);
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Multipager Template : Give Blood Give Life</title>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- FLEXSLIDER STYLE  -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    
</head>
<body>

 <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/logo.jpg" />
                </a>

            </div>
            <div class="right-div">
<strong>Support : </strong>  sw2Donation@gmail.com
            </div>
          
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="menu-top-active" >HOME</a></li>
                        
                            <li><a href="about.php">ABOUT US</a></li>
                             <li><a href="contactUs.php" >Contact Us</a></li>
                             <li><a href="controlP.php">Sign Up</a></li>
                            <li><a href="control panelL.php">Sign In</a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>




<h2>Signup Form Of Blood Bank</h2>

<form action="BloodBankSignup.php" name="myForm" method = "POST" style="border:1px solid #ccc" onsubmit="return validateForm()">
  <div class="container">
    <label><b> Name </b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

 <div><label><b> Address </b></label>
    <input type="text" placeholder="Enter Address" name="address" required></div>


    <div><label><b> Phone Number </b></label>
    <input type="text" placeholder="Enter Phone number" name="phone" required></div>

<div><label><b> Email </b></label>
    <input type="text" placeholder="Enter Email" name="email" required></div>

 
    <div><label><b> Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required></div>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
   <!-- <input type="checkbox" checked="checked"> Remember me -->
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
     <!-- <button type="button" class="cancelbtn">Cancel</button> -->
      <button type="submit" name ="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
<!--
<script>
function validateForm() {
    var a = document.forms["myForm"]["name"].value;
    var b = document.forms["myForm"]["date"].value;
    var c = document.forms["myForm"]["address"].value;
    var d = document.forms["myForm"]["phone"].value;
    var e = document.forms["myForm"]["email"].value;

    var x = document.forms["myForm"]["password"].value;
    var y = document.forms["myForm"]["psw-repeat"].value;
    if (a == "") {
        alert("Name must be filled out");
        
    }
     if (x == "") {
        alert("Password must be filled out");
       
    }
if (y == "") {
        alert("Confirm Password Field must be filled out");

    } 

        if (x <> y) {
        alert("The two password doesn't match");
        return false;
    }
    if (b == "") {
        alert("Date must be filled out");
        return false;
    }
    if (c == "") {
        alert("Address must be filled out");
        return false;
    }
    if (d == "") {
        alert("Phone must be filled out");
        return false;
    }
    if (e == "") {
        alert("email must be filled out");
        return false;
    }

}
</script> -->



   <div class="footer-sec">
         <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

              
                                    <h3> <strong>ABOUT COMPANY</strong> </h3>
                                    <p style="padding-right:50px;" >
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                                    </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div">
               

              
                                        <h3> <strong>SOCIAL PRESENCE</strong> </h3>
                We love to be social,Catch Us On
                <a href="#" ><h4>FACEBOOK </h4></a>
                   <a href="#" ><h4>TWITTER </h4></a>
                 <a href="#" ><h4>LINKEDIN </h4></a>
                                    
                    
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3> <strong>PHYSICAL LOCATION</strong> </h3>
                Reach Us Below:
                <br />
                <h4>90/567, Raw Street Lane,</h4>
                 <h4>United States of America,</h4>
                 <h4>Pin: 309987-09</h4>
            </div>
        </div>
 <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <hr />
                <div style="text-align:right;padding:5px;">
                    &copy;2014 yourdomain.com | <a href="http://www.binarytheme.com/" style="color:#fff;" target="_blank" >Designed By: Binarytheme.com</a>
                </div>
            </div>
    </div>
    </div>
       </div>
     <!--FOOTER SECTION END-->
      <!-- WE PUT SCRIPTS AT THE END TO LOAD PAGE FASTER-->
     <!--CORE SCRIPTS PLUGIN-->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
     <!--BOOTSTRAP SCRIPTS PLUGIN-->
<script src="assets/js/bootstrap.js"></script>
     <!--WOW SCRIPTS PLUGIN-->
    <script src="assets/js/wow.js"></script>
     <!--FLEXSLIDER SCRIPTS PLUGIN-->
    <script src="assets/js/jquery.flexslider.js"></script>
     <!--CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>

</html>





