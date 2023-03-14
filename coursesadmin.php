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
			include('menuadmin.php');
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
        
            <h2 align="center">Uganda Martyrs University Registered Courses</h2><br/>
            <table border="0" cellpadding="8" cellspacing="1" width="800px" align="center">
			<tr bgcolor="#000066" style="color:#FFFFFF">
			<th >S/No.</th>
			<th>Course Name</th>
			<th>Faculty</th>
			<th>Duration</th>
 					
			<th colspan="2">Action</th>
			</tr>
			<tbody>
			<?php
					include ('db.php');
					$sno =0;
					$query = mysql_query("select * from courses");
					while ($row = mysql_fetch_array($query)){
					$sno++;
					$color=($sno%2==0)?"lightblue":"white";
					$id =$row['Id'];
					?>
					<tr bgcolor="<?php echo $color;?>" style="color:#000000" >
			<td><?php echo '0'. $sno; ?></td>
			<td><?php echo $row['coursename']; ?></td>
			<td><?php echo $row['faculty']; ?></td>
			<td><?php echo $row['period']; ?></td>
 			<td> <a href="deletecourse.php?id=<?php echo $id; ?>"><img src="images/delete.png" height="15" width="15" alt="del" /></a></td>
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

<div id="templatemo_footer_wrapper" style="margin-top:-15px;">
	<div id="templatemo_footer"><span class="cup"></span> <span class="footer_friut"></span>

        Copyright © 2017 <font>UMU</font><br /> 
       
    </div> <!-- end of templatemo_footer -->
    
    <div class="cleaner"></div>
</div> <!-- end of templatemo_footer_wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>