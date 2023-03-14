<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Students Admission System || Home</title>
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
            
        	<h3 style="margin-left:-62px;" class="disabled" ><b>Menu Navigation Admin</b></h3>
        
            <div class="col-md-12 col-sm-12 col-xs-12 kjsn">
<ul class="categories_list" style="margin-left:-80px;"  >
             <li><a  href="print.php"   class="Fic"   >PRINT ADMISSION</a></li>
               <!--    <li><a  href="addstudent.php" class="Fic">New Student </a></li>
                 <li><a href="viewcourses.php" class="Fic">Programs / Courses</a></li>
				<li><a href="viewfaculty.php" class="Fic">Faculties / Departments</a></li>    
                <li><a href="logout.php" class="Fic">Logout</a></li>
              -->  
			</ul>
			</div>
        
        </div> <!-- end of templatemo_sidebar -->
        
        <div id="templatemo_content" >
		  <h3 align="center" style="color:#ee0000">ALL YOUR DETAILS HAVE BEEN SUCCESSFULY SUBMITTED,<br />
					YOU CAN NOW PRINT YOUR ADMISSION FORM.</h3><br/>
 <a  href="print.php"   class="Fic"   >PRINT ADMISSION</a> 
             
  			<form  method="post"  enctype="multipart/form-data" name="frm" action="newfaculty.php" style="margin-left:-100px;">
            <table border="0" cellpadding="0" cellspacing="0" width="800px" align="center">
			<tr>
        <!--
            <h2 align="center" style='color:red;'>UMU Online Students Admission System</h2>
			-->
            <p><img src='images/umu.png'  style="margin-left:100px; width:700px; height:400px; margin-top:30px;"/></p>
         <P style="margin-top:100px">
         <div class="cleaner_h40"></div>
            
           
            
        </div> <!-- end of templatemo_content -->
    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_main -->

	<div class="cleaner"></div>
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper" style="width:700px; magin-top:100px;">
	<div id="templatemo_footer"><span class="cup"></span> <span class="footer_friut"></span>

        Copyright © 2017 <font>UMU  </font><br /> 
       
    </div> <!-- end of templatemo_footer -->
    
    <div class="cleaner"></div>
</div> <!-- end of templatemo_footer_wrapper -->
</div>
</div>
</div

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>