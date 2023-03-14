<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Academic Progress Tracking System</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<SCRIPT TYPE="text/javascript">
<!--
// copyright 1999 Idocs, Inc. http://www.idocs.com
// Distribute this script freely but keep this notice in place
function numbersonly(myfield, e, dec)
{
var key;
var keychar;

if (window.event)
   key = window.event.keyCode;
else if (e)
   key = e.which;
else
   return true;
keychar = String.fromCharCode(key);

// control keys
if ((key==null) || (key==0) || (key==8) || 
    (key==9) || (key==13) || (key==27) )
   return true;

// numbers
else if ((("0123456789").indexOf(keychar) > -1))
   return true;

// decimal point jump
else if (dec && (keychar == "."))
   {
   myfield.form.elements[dec].focus();
   return false;
   }
else
   return false;
}

//-->
</SCRIPT>
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
        <ul>
                <li><a href="index1.php" class="current first">Home</a></li>
                <li><a href="lecturers.php">Lecturers</a></li>
                <li><a href="students.php">Students</a></li>
                <li><a href="courses.php">Courses</a></li>
				<li><a href="units.php">Course Units</a></li>
                
            </ul> 
        </div> <!-- end of templatemo_menu -->
    
    	<div class="cleaner"></div>
  </div> <!-- end of templatmeo_header -->
    
    <div id="templatemo_main">
    
        <div id="templatemo_sidebar">
        
        	
            <div class="cleaner_h30"></div>
            
        	<h3>Menu Navigation</h3>
        
              <?php include('sidebar.php'); ?>
        	
        
        </div> <!-- end of templatemo_sidebar -->
        
        <div id="templatemo_content">
        
            <h2 align="center" style="color:#ee0000">Add Courses</h2><br/>
			<form action="addcourse.php" method="post"  enctype="multipart/form-data">
            <table border="0" cellpadding="0" cellspacing="0" width="800px" align="center">
			<tr>
			
			<th  >Course Name</th>
			<th><input type="text" name="cname" style="width:300px; height:30px;"   required /></th>
			<th>Faculty</th>
			<th><input type="text" name="fname" style="width:300px; height:30px;"  required /></th>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<th >Duration</th>
			<th><select name="year" style="width:300px; height:30px;"  required >
			<option>------------------------Select Option--------------------------</option>
			<option value="1">One Year</option>
			<option value="2">Two Years</option>
			<option value="3">Three Years</option>
			<option value="4">Four Years</option>
			</select></th>
			<th>Tution Fees</th>
			<th><input type="text" name="tution" onKeyPress="return numbersonly(this, event)" style="width:300px; height:30px;"   required />
			</th>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<th  >&nbsp;</th>
			<th><input type="submit" name="submit" style="width:300px; height:30px;" value="Add Course"   /></th>
			<th>&nbsp;</th>
			<th><input type="reset" name="submit" style="width:300px; height:30px;" value="Cancel"   /></th>
			</tr>
			
			</table>
			</form>
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