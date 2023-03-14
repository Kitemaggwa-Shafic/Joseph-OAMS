<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head><title>Students Admission System || home</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<!-- jQuery file -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
$('#tabsmenu').tabify();
$(".toggle_container").hide(); 
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
	return false;
});
});
</script>
</head>
<body>
<div id="panelwrap">
  	
	<div class="header">
        <!--
    <div class="title"><a href="#">UMU Kabaale Students Admission</a></div>
    -->
    <div class="header_right">Welcome AR, <a href="#" class="settings">Settings</a> <a href="login.php" class="logout">Logout</a> </div>
    
     <div class="menu">
    <div style="color:blue; margin-left:180px; font-size:20px;">
         UGANDA MARTYRS UNIVERSITY KABAALE CAMPUS ONLINE STUDENTS REGISTRATION</div>
    </div>
    
    </div>
    <!--
    <div class="submenu">
    <ul>
    <li><a href="#" class="selected">settings</a></li>
    <li><a href="#">users</a></li>
    <li><a href="#">categories</a></li>
    <li><a href="#">edit section</a></li>
    <li><a href="#">templates</a></li>
    </ul>
    </div>          
      -->              
    <div class="center_content">  
 
    <div id="right_wrap" style="margin-left:-80px;">
    <div id="right_content">             
    <h2><center>If you are a new student, register the details below with us</center></h2> 
                    
                    
<table id="rounded-corner">
   
   <div id="loginpanelwrap" style="margin-top:20px;">
  
      <div class="loginform" >
	<form action="student_register.php" method="post" >
        
        <div class="loginform_row">
        <label>Email Address:</label>
        <input type="text" class="loginform_input" name="email" required />
        </div>
        <div class="loginform_row">
        <label>Full Name:</label>
        <input type="text" class="loginform_input" name="name" required />
        </div>
        <div class="loginform_row">
        <label>Password:</label>
        <input type="password" class="loginform_input" name="password" maxlength='10' required />
        </div>
        <div class="loginform_row">
        <label>Confirm Passwod:</label>
        <input type="password" class="loginform_input" name="cpassword" required />
        </div>
	 
        <div class="loginform_row" style="margin-left:-5px;">
        <input type="submit" class="loginform_submit" style="width:350px;" value="Signin" name="submit" />
         
	</div>
        <div class="loginform_row" style="margin-left:185px;">
            <a href="student_login.php" >Already Registered, Login </a>
         
	</div>
        <div class="clear"></div>
	</form>
    </div>
 
</div>
    
    
    <?php
               if(isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["name"])&& !empty($_POST["password"]) && !empty($_POST["cpassword"])  ){

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
                
$insert="insert into login (emailaddress,fullname,password,cpassword ) values('$email','$name','$password','$cpassword')";

                 $sql=mysql_query($insert,$con); //this function excecutes our query
 				header("Location:view_students.php");
		             echo "Student Successfuly Registered".mysql_error();

                 if(!$sql){
                    
                    echo "failed to insert data".mysql_error();
                    
                }
		 
        }
        
        else{
            
          //  echo "none of the fields should be left blank";
        }
        
        ?>
    
</table>

     
    <ul id="tabsmenu" class="tabsmenu" style="margin-left:150px;">
        <li class="active"><a href="#tab1">Programs</a></li>
        <li><a href="#tab2">Requirements for Each Program</a></li>
        <li><a href="#tab3">Login Panel</a></li>
     </ul>
   
     <div id="tab1" class="tabcontent" style="color:brown;">
      <h3>Programs we Offer.</h3>
        <ul class="lists">
        <li>Degrees </li>
        <li>Diploma</li>
        <li>Certificates</li>
  
         </ul>
    </div>
   
    <div id="tab2" class="tabcontent" style="color:brown;">
        <h3>Requirements</h3>
        <p> 
    We have <a href="">Degree</a> programs for all students who have completed their A-Level and have got all the two Principal passes on the same sitting. <br /><br />
             We have <a href="">Diploma</a> programs for all students who have completed their O-Level and have got all the two Principal passes on the same sitting. <br /><br />
   We have <a href="">Certificate</a> programs for all students who have completed their O-Level and have got all the four Credits with a credit in English and a credit Mathematics. <br />
        </p> 
    </div>

    <div id="tab3" class="tabcontent" style="color:brown;">
        <h3><center>Sign in Panel</center></h3>
        	
<div id="loginpanelwrap"  style="margin-top:-10px;">
  	
  <div id="loginpanelwrap"  style="margin-top:-10px;">
  	
  <ul>
            <li><a href="student_register.php">Student Signup</a></li>
            <li><a href="student_login.php">Student Login</a></li>
            <li><a href="adminlogin.php">Academic Register</a></li>
         </ul>
 
</div>
 
</div>
        
    </div> 
    
   <div class="toogle_wrap" style="margin-top:10px;">
            <div class="trigger"><a href="#">Check Requirements for Degree, Diploma and Certificates</a></div>

            <div class="toggle_container">
			<p>
                If you did <a href="#">Sciences</a> you can qualify for courses in Telecommunications, Mechanical, Civil, Electrical engineering at the faculty of Engineering. If you already have a <a hef="#">Diploma</a>, you can enroll to a Bachelors Degree, and if you have a <a href="#">Certficate</a> from a recignised Institution, you will be enrolled in Dilpoma courses. 
                You have to have acquired at least two <a href="#">Principal</a> passes at A-Level to qualify to be given a course at the University.
			</p>
            </div>
        </div>
      
     </div>
     </div><!-- end of right content-->
                     
  <!--                  
    <div class="sidebar" id="sidebar" >
 
    <h2 style="margin-top:210px;"><center>LOGIN PANEL</center></h2>
    
        <ul>
            <li><a href="home1.php">Student Login</a></li>
            <li><a href="#">Admin Login</a></li>
            <li><a href="#">Academic Register</a></li>
         </ul>   
    </div>             
    
    -->
    <div class="clear"></div>
    </div> <!--end of center_content-->
    
    <div class="footer">
<?php
include('footer.php');
?>
</div>

</div>

    	
</body>
</html>