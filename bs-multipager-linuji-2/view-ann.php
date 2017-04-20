
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
    
<form action="" method="post">
<p >Blood Bank</p>
  <select name="user"  width="20" >
<?php
  
  mysql_connect('localhost', 'root', '');
  mysql_select_db('Database-4');
  $sql="SELECT title FROM BankAnnouncement";
  $result=mysql_query($sql);
  while($row= mysql_fetch_array($result)){
	  ?>
	 
	  <option   value=" <?php   echo $row['id']; ?> ">  <?php   echo $row['title']; ?>  </option>
 <?php } ?> </br><input type="submit" value="submit" name="submit">
 

  <?php  if(isset($_GET['submit']) ) {
	  echo "im in";
	  $userID=$_GET['user'];
	  header("location: veiw.php?id=".$userID);
  } ?>

 </select>

  <p >Blood Donation  Compaign Orqanizer</p> 
  <select name="CompaignOrqanizer" >
  <?php
  $sql="SELECT title FROM CampaignEvent";
  $result=mysql_query($sql);
 
   while($row= mysql_fetch_array($result)){

	?> <option value=" <?php   echo $row['id']; ?> "><?php   echo $row['title']; ?> </option>
 <?php } 
 ?> </br>
 <input type="submit" value="submit" name="submit"></br>
 
   <?php  if(isset($_GET['submit']) ) {
	   echo "im in";
	  $userID=$_GET['user'];
	  header("location:veiw.php?id=".$userID);
  } ?>
 </select>

</form> 
   
 <div class="footer-sec">
         <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

              
									
									<p style="padding-right:50px;" >
									The Blood you donate
									               gives someone another <span> <strong>CHANCE</strong>  </span>at life
									</p>
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