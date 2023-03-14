<?php
require('db.php');
//ob_start();
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Students Admission System</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,vietnamese" rel="stylesheet">
<!-- //web-fonts -->
</head>


<body>
<div id="templatemo_wrapper">
  <div id="templatemo_header">
    
        <div id="site_title">
            <h1><a href="#">
                <center><img src="images/logo.png" /></center>
                <span>Uganda Martyrs University</span>
            </a></h1>
        </div>

        <div id="templatemo_menu">
            
        </div> <!-- end of templatemo_menu -->
    
    	<div class="cleaner"></div>
  </div> <!-- end of templatmeo_header -->
    
    <div id="templatemo_main" class="center-container">
	
   <div class="main-content-agile" style="margin-left:-110px; width:330px;">
			<div class="wthree-pro">
				<h2>Login AR</h2>
			</div>
			<div class="sub-main-w3">	
 <form method="post" enctype="multipart/form-data" action="checkloginadmin.php">     	       
					<input placeholder="Enter Username" name="username" type="username" required="">
 
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
					<input  placeholder="Enter Password" name="password" type="password" required="">
 
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
 
 				 <input type="submit" name="submit" value="Login" style="margin-left:-230px; width:100px;" />
 				 <input type="reset" name="submit" value="Cancel" style="margin-right:-210px; width:100px;" /> 
 
				</form>
			</div>
		</div>
	<!-- end of templatemo_sidebar -->
        
        <div id="templatemo_content" style="margin-top:-450px;">

              <p><img src='images/mru.jpg'  width="1200" height="500"/></p>
          <p style="width:700px; margin-left:-50px; ">The Online students Admission system is designed to help students from 
			any where to register with the University.
			 It is essential that you complete and fill all relevant information asked carefully before you submit your details to the system.
                After completing filling the form, make sure that you reach the University and the lecturers shall not wait for late students.
           </p>
          <div class="cleaner_h40"></div>
            
           
        </div> <!-- end of templatemo_content -->
    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_main -->

	<div class="cleaner"></div>
</div> <!-- end of wrapper -->




<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer"><span class="cup"></span> <span class="footer_friut"></span>

        Copyright © 2017 <font>UMU</font><br /> 
       
    </div> <!-- end of templatemo_footer -->
    
    <div class="cleaner"></div>
</div> <!-- end of templatemo_footer_wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>