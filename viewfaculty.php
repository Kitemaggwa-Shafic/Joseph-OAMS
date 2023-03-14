<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Academic Progress Tracking System</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="templatemo_wrapper">
  <div id="templatemo_header">
    
        <div id="site_title">
            <h1><a href="index.html">
                <img src="images/templatmeo_logo.png" alt="fruit mix" />
                <span>Uganda Martyrs University</span>
            </a></h1>
        </div>

        <div id="templatemo_menu">
           <?php
			include('menustudent.php');
			?>
        </div> <!-- end of templatemo_menu -->
    
    	<div class="cleaner"></div>
  </div> <!-- end of templatmeo_header -->
    
    <div id="templatemo_main">
    
        <div id="templatemo_sidebar">
        
        	
            <div class="cleaner_h30"></div>
            
        	<h3>Menu Navigation</h3>
        
<?php include('sidebar.php'); ?>
        	
        	
        
        </div> <!-- end of templatemo_sidebar -->
        
        <div id="templatemo_content" style="margin-left:-100px;">
        
            <h2 align="center">Uganda Martyrs University Registered Faculties</h2><br/>
            <table border="0" style="margin-left:-80px; "cellpadding="2" cellspacing="1" width="850px" align="center">
			<tr bgcolor="#000066" style="color:#FFFFFF">
 			<th>Faculty Name</th>
 			<th>Contacts</th>
			<th>Emailadrress</th> 
  			</tr>
			<tbody>
 <!--
 "SELECT faculty.facultyname, faculty.department, courses.coursename,course_student.coursename
FROM
faculty
LEFT JOIN
course_student
ON courses.id=course_student.id
  LEFT JOIN
faculty
ON faculty.id=course_student.id
GROUP BY courses.id"
 -->
			<?php
					include ('db.php');
					$sno =0;
					$query = mysql_query("select facultyname,contacts,email from faculty") or die(mysql_error());
                    while ($row = mysql_fetch_array($query)) {
					$sno++;
					$color=($sno%2==0)?"lightblue":"white";
                     ?>
					
					<tr bgcolor="<?php echo $color;?>" style="color:#000000" >
 			<td><?php echo $row['facultyname']; ?></td>
 			<td><?php echo $row['contacts']; ?></td>
			<td><?php echo $row['email']; ?></td>
  			 
 		</tr>
		</tbody>
		<?php } ?>
			
			
			</table>
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