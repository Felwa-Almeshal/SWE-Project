<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_DATABASE = 'Database'; //DB Name here
//Connect to mysql server
$con = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD );

//Check connection :
if(!$con) {
die('Failed to connect to server: ' . mysql_error());
}

//Select database
$db = mysql_select_db($DB_DATABASE , $con);
//Check selection :
if(!$db) {
die("Unable to select database");
} 
session_start();

if(isset($_POST['edit'])){//start if press edit
$new_name = $_POST['D_Name'];
$new_address = $_POST['D_address'];
$new_phone = $_POST['D_phone'];
$new_email = $_POST['D_email'];
$new_DOB = $_POST['D_DOB'];
$new_password = $_POST['D_password'];


//Write the query :
$query = "UPDATE Donor SET `name`='$new_name',`email`='$new_email',`password`='$new_password',`address`='$new_address',`phone`='$new_phone',`D.O.B`='$new_DOB' Where `email` = '$new_email'";
$result = mysql_query($query);

if($result){
 
    echo '<script>success()</script>';

}else {
    echo '<script>error()</script>';
    die(mysql_error());
}
}//end if valid user 
//close connection
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
    <title> Give Blood Give Life</title>

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
 <!--Validation Section -->
<script>
function validateForm() {
    var name = document.forms["edit_Donor"]["D_Name"].value;
    var password = document.forms["edit_Donor"]["D_password"].value;
    var DOB = document.forms["edit_Donor"]["D_DOB"].value;
    var Address = document.forms["edit_Donor"]["D_address"].value;
    var email = document.forms["edit_Donor"]["D_email"].value;
    var phone = document.forms["edit_Donor"]["D_phone"].value;


    if (name == "" || password == ""|| DOB == "" || Address == "" || email == "" || phone == "") {
        alert("All field must be filled out");
        return false;
    }
}
//Successful message :
 function success(){
    alert("Account Successfully Updated.");
 }

function error(){
        alert("Sorry, there's an error please try again.");
}

</script>

 <!--End-->

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

                    <img src="assets/img/s.jpg" />
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
                            <li><a href="contact.html">Sign In</a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
     <!-- MENU SECTION END-->
  
    <div class="below-slideshow">
         <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="txt-block">

              
									<h1 class="head-line"> Donor </h1>
									
                      </div>
            </div>
        </div>

    </div>
    </div>
    <!-- BELOW SLIDESHOW SECTION END-->
      <div class="container">
        <div class="row">

<form name="edit_Donor" onsubmit="return validateForm()" method="POST" action="EditFile_Donor.php">

           <!---Edit profile Form (Right side)  -->
           <div style="padding-left: 250px; float: left ; width: 350px">
           <!--Name -->
           <label style="padding-top: 25px">Name :</label>
              <input type="text" name="D_Name"/>
            <!--Email -->
            <br/>
            <label style="padding-top: 25px">Email :</label>
             <input type="text" name="D_email"/>
            <!--password -->
            <br/>
            <label style="padding-top: 25px">Password :</label>
            <input type="password" name="D_password">
            <br/>
           </div>
           <!--End Eidt profile form (Right side )-->

           <!---Edit profile Form (left side)  -->
           <div style="padding-left: 250px; float: left; width: 500px">
           <!--DOB -->
           <label style="padding-top: 25px">DOB :</label>
           <br/>
           <!--Date picker -->
            <input type="text" name="D_DOB">
           <!--Address -->
            <br/>
            <label style="padding-top: 25px">Address :</label>
             <input type="text" name="D_address"/>
            <!--Phone Number -->
            <br/>
            <label style="padding-top: 25px">Phone Number :</label>
            <input type="text" name="D_phone">
            <br/>
           </div>
           <!--End Eidt profile form (left side )-->
           <br/>
           <div style="float: left; padding-left: 850px; width: 500px">
           <button name="edit">Edit</button>
           </div>
           </form>
            </div>
          </div>
     <!-- TAG HOME SECTION END-->
    <div class="just-sec">
        

        <div class="container">
             
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height:500px;">
                <div class="alert alert-info">
                    This is  an donor's edit profile page which you can update your information easily. for any help <a href="contactUs.html">Contact Us</a>.
                      </div>
            </div>
           
        </div>
             
    </div>
    </div>         

      <!--SET-DIV SECTION END-->
   
 <div class="footer-sec">
         <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

              
                                    <h3> <strong>ABOUT COMPANY</strong> </h3>
                                    <p style="padding-right:50px;" >
                                        Blood Bank System  is a browser based system that is designed to store, process, retrieve and analyze information concerned with the need of  blood donation 
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
                <h4>Exit 1, King Khaled Road,</h4>
                 <h4>Alriyadh , Saudi Arabia </h4>
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
