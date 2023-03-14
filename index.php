<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Students Admission System</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

 <link rel="stylesheet" href="css/style3.css">  
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<!--Web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
<!--//Web-fonts-->
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Striking Dual form  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta tag Keywords -->
</head>

</head>
<body>
<div id="templatemo_wrapper">
  <div id="templatemo_header">
    
        <div id="site_title" style="margin-left:200px;">
            <h1><a href="#">
                 <img src="images/logo.png" /> 
                <span>Uganda Martyrs University</span>
            </a></h1>
        </div>


    
    	<div class="cleaner"></div>
  </div> <!-- end of templatmeo_header -->
    
    <div id="templatemo_main" style="margin-top:50px;">
    
        <div id="templatemo_sidebar"  class="Fic" style="height:50px; margin-left:-100px; margin-top:50px;">
        
        	
            <div class="cleaner_h30"></div>
            
        	<h3><center>Select Panel</center></h3>
        
            <ul class="categories_list">
                <li><a  href="index.php" class="Fic" style="margin-left:-11px;">Home</a></li>
                <li><a  href="login_student.php" class="Fic" style="margin-left:-11px;">Student Login</a></li>
                 <li><a href="admin_login.php" class="Fic" style="margin-left:-11px;">Academic Register Panel</a></li>
<li><a href="#small-dialog" class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" class="Fic" style="margin-left:-11px; width:140px;">Sign up</a></li>

			   
			</ul>
        	
        
        </div> <!-- end of templatemo_sidebar -->
        
		
 		<div class="pop-up"> 
	<div id="small-dialog" class="mfp-hide book-form">
		<h3>Sign Up Form </h3>
			<form action="studentsignup.php" method="post" >
		<p>Sigup Number:</p>
        <input type="text" class="loginform_input" name="auto" value = "<?php include('autonumber.php'); ?>" disabled required />

         <p>Email Address:</p>
        <input type="text" class="loginform_input" name="email" required />
         <label>Full Name:</label>
        <input type="text" class="loginform_input" name="name" required />
         <label>Password:</label>
        <input type="password" class="loginform_input" name="password" maxlength='10' required />
         <label>Confirm Passwod:</label>
        <input type="password" class="loginform_input" name="cpassword" required />
         
		<input type="submit" name="submit" value="Sign Up">
             <a href="login_student.php" >Already Registered, Login </a>
         
	</div>
			</form>
			
			 <?php
               if(isset($_POST["submit"]) && !empty($_POST["auto"]) && !empty($_POST["email"]) && !empty($_POST["name"])&& !empty($_POST["password"]) && !empty($_POST["cpassword"])  ){
$auto=$_POST["auto"];
           $email=$_POST["email"];  
           $name=$_POST["name"];
           $password=$_POST["password"];
           $cpassword=$_POST["cpassword"];
	       
                
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("admission",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
$insert="insert into login (autonumber,emailaddress,fullname,password,cpassword ) values('$auto','$email','$name','$password','$cpassword')";

                 $sql=mysql_query($insert,$con); //this function excecutes our query
 				header("Location:login_student.php");
		             echo "Student Successfuly Registered".mysql_error();

                 if(!$sql){
                    
                    echo "failed to insert data".mysql_error();
                    
                }
		 
        }
        
        else{
            
          //  echo "none of the fields should be left blank";
        }
        
        ?>
			
</div>
			
        <div id="templatemo_content" >
        
           <!-- <h2 align="center" >UMU Online Students Admission System</h2>
		   -->
            <p><img src='images/umu.png' height="200px"  width="700" style="margin-left:-50px;"/>
             <img src='images/umu1.jpg' height="200px"  width="700" style="margin-left:-50px;"/></p>
			<p style="width:700px; margin-left:-80px; ">The Online students Admission system is designed to help students from 
			any where to register with the University.
			 It is essential that you complete and fill all relevant information asked carefully before you submit your details to the system.
                After completing filling the form, make sure that you reach the University and the lecturers shall not wait for late students.
            </td><div class="cleaner_h40"></div>
            
           
            
        </div> <!-- end of templatemo_content -->
    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_main -->

	<div class="cleaner"></div>
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer"><span class="cup"></span> <span class="footer_friut"></span>

        Copyright © 2017 <font>UMU University</font><br /> 
       
    </div> <!-- end of templatemo_footer -->
    
    <div class="cleaner"></div>
</div> <!-- end of templatemo_footer_wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
<!-- // Pop up -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>
</body>
</html>