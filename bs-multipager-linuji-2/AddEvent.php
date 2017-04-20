<?php
//http://localhost/phpmyadmin/
session_start();

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
	
if (isset($_POST['submit'])){
$title = $_POST['title'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$annDetails = $_POST['annDetails'];
$id = $_GET['id'];

$sql = "INSERT INTO `BankEvent` (`title`, `startDate`, `endDate`, `annDetails`, `id`) VALUES ('$title','$startDate','$endDate','$annDetails', '$id')";
$result = mysql_query($sql);
if($result){
	echo "Event Successfully Added";
}else {
	die(mysql_error());
}




header("Location: index.html");





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
    </section>     <!-- MENU SECTION END-->
    <div id="slideshow-sec">
        <div id="carousel-div" class="carousel slide" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/482145647.jpg" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" > Give Blood ..</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Give Life ..</h2>  
                            </div>
                           
                        </div>
                        <div class="item">
                            <img src="assets/img/1.jpg" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" >Give Blood ..</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Give Life ..</h2>  
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/3.jpg" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" >Give Blood .. </h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Give Life ..</h2>  
                            </div>
                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-div" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-div" data-slide-to="1"></li>
                        <li data-target="#carousel-div" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-div" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-div" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
    </div>
    <!-- SLIDESHOW SECTION END-->
    <div class="below-slideshow">
         <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="txt-block">

              
                <i class="fa fa-lastfm fa-4x"></i>
									<h4> .. Donors ..</h4>
								
                      </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="txt-block">

              
                <i class="fa fa-yelp fa-4x"></i>
									<h4> .. Blood Bank .. </h4>
									
                      </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="txt-block">

              
                <i class="fa fa-ioxhost fa-4x"></i>
									<h4> .. Compigan Organizer .. </h4>
									                      </div>
            </div>
        </div>

    </div>
    </div>
    
    <div class="AddEventContent">
    <!-- AddEventBloodB contunt --!>
    <!-- ****************************** --!>
    <br>
    <h1> Blood Bank </h1>
    
<form action="AddEvent.php" name="myForm" method = "POST" style="border:0px solid #ccc" onsubmit="return validateForm()">
    <br> <br> <br>
   
<label> Event title <br> </label>
<input type="text" name="title">

<br> <br> <br> 

  <label> Start date </label>  <br>
    <input type="text" name="startDate" data-icon="calendar" value="Calendar Input Button">  
    <!--    <label><b> DOB </b></label>
    <input type="text" placeholder="Enter Date" name="date" required> --!>
   <div class="EndDate"> <label> End date </label>  <br>
    <input type="text" name="endDate" data-icon="calendar" value="Calendar Input Button">  </div>
    
    
<br> <br> 
     
  <label> Event details </label> <br>
   <textarea rows="4" cols="50" name="annDetails">  Event details </textarea>  
   
   <br> <br>  
        <button type="submit" name ="submit" class="AddEvent"> Add Event </button>
    
    
    </form>
    
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
