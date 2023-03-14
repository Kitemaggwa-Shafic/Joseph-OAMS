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
<title>Academic Progress Tracking System</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_wrapper">
  <div id="templatemo_header">
    
        <div id="site_title">
            <h1><a href="index.html">
                <center><img src="images/header1.png"  /></center>
                <span>Uganda Martyrs University</span>
            </a></h1>
        </div>

        <div id="templatemo_menu">
            
        </div> <!-- end of templatemo_menu -->
    
    	<div class="cleaner"></div>
  </div> <!-- end of templatmeo_header -->
    
    <div id="templatemo_main">
    
        <div id="templatemo_sidebar">
        
        	
            <div class="cleaner_h30"></div>
			<div class="cleaner"></div>
			<div class="cleaner"></div>
			<div class="cleaner"></div>
            
   <form method="post" enctype="multipart/form-data" action="checklogin.php">     	       
 <table bgcolor="#99CCFF">
 
            <tr><td>
           <strong> Login Panel</strong> <br /><br />
            &nbsp;User Name:<br /><input type="text" name="uname" size=25  required/><br />
            &nbsp;Password :<br /><input type="password" name="pass" size=25 required/><br />
			&nbsp;course Code :<br /><select name="code" style="width:200px; height:30px;"  required >
			<option>-------------Select Option----------------</option>
			<?php $qry =mysql_query("select * from assignments");
			while ($row = mysql_fetch_array($qry)){
			?>
			<option value="<?php echo $row['unit']; ?>"><?php echo $row['unit']; ?></option>
			<?php
			}
			?>
			</select><br />
            <center><input type="submit" name="submit" value="Login" /></center>
            </td></tr></table>
            </form>
			
                
			</ul>
        	
        
        </div> <!-- end of templatemo_sidebar -->
        
        <div id="templatemo_content">
        
            <h2 align="center">Academic Progress Tracking System</h2>
            <p><img src='images/mru.png'  width="800"/></p>
            <p style="width:800px;">The academic Progress tracking system is a system designed to help parents to track the academic performances of their children. It will help the parents to know whether the student/children are at school or not in order not to be surprised on graduation days</p>
          <div class="cleaner_h40"></div>
            
           
            
        </div> <!-- end of templatemo_content -->
    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_main -->

	<div class="cleaner"></div>
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer"><span class="cup"></span> <span class="footer_friut"></span>

        Copyright © 2015 <font>Uganda Martyrs University</font><br /> 
       
    </div> <!-- end of templatemo_footer -->
    
    <div class="cleaner"></div>
</div> <!-- end of templatemo_footer_wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>