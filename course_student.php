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
            
        	<h3>Menu Navigation</h3>
        
            <?php include('sidebar.php'); ?>
        	
        
        </div> <!-- end of templatemo_sidebar -->
        
        </div> <!-- end of templatemo_sidebar -->
        
        <div id="templatemo_content" >
        
            <h2 align="center" style="color:#ee0000; margin-left:-50px;">Add Your Course</h2><br/>
			<form  method="post"  enctype="multipart/form-data" name="frm" action="course_student.php">
            <table border="0" cellpadding="0" cellspacing="0" width="600px" align="center">
			<tr>
			
			  <th>Student Name:</th>
			<th>
 			<select name="auto" style="width:380px;height:33px" class="form_select" >
			<option>---------------Select Your Name--------------------</option>
			<?php require ('db.php');
			$qry =mysql_query("select * from  student");
			while ($row = mysql_fetch_array($qry)){
			?>
			<option name="auto" value="<?php echo $row['firstname']; ?>">
			<?php echo $row['firstname']; ?>
			</option>
			<?php
			}
			?>
			</select>
 			</th></tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<th>Course Name:</th>
			<th>
 			<select name="coursename" style="width:380px;height:33px" class="form_select" >
			<option>------------------------Select Course--------------------------</option>
			<option>Bachelor of Business Admistration & Managment</option>
                 <option>BEDS</option>
                 <option>Bachelor of Science in Information Technology</option>
                 <option>DRIM</option>
                 <option>DSTIT</option>
                 <option>DPE</option>
                 <option>Diploma in Business Admistration and Management</option>
                 <option>Certificate in Information Technology</option>
                 <option>Certificate in Library & Information Science</option>
                 <option>Certificate in Medical Records and Management</option>
			</select>
			 </th>
			 
			<tr> 
				<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<th>Sponsor:</th>
			<th>
			<select name="sponsorname" style="width:380px;height:35px" class="form_select" style="width:450px;height:25px" class="form-control" >
			<option>------------------------Select Sponsorship--------------------------</option>
			<?php require ('db.php');
			$qry =mysql_query("select * from  sponsorship");
			while ($row = mysql_fetch_array($qry)){
			?>
			<option name="sponsorname" value="<?php echo $row['sponsorname']; ?>"><?php echo $row['sponsorname']; ?></option>
			<?php
			}
			?></select>
 			</th>	
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			<th>Period Of Study:</th>
			<th><input type="text" name="period" onkeyup="AllowAlphabet()" style="width:380px; height:30px;"  required />
			</th></tr>
			<tr> 
				<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
	   
			<tr>
			<th  >&nbsp;</th>
			<th><input type="submit" name="save" style="width:380px; height:40px; font-size:18px;" value="Register for Course"   /></th>
			<th>&nbsp;</th>
 			</tr>
			
			
			</table>
			</form>
			
		 <?php
        if(isset($_POST["save"]) && !empty($_POST["auto"]) && !empty($_POST["coursename"]) && !empty($_POST["period"]) && !empty($_POST["sponsorname"])  ){
          $auto=$_POST["auto"]; 
		  $coursename=$_POST["coursename"];  
			  $period=$_POST["period"];
			  $sponsorname=$_POST["sponsorname"];
		 
                
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("admission",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
                $insert="insert into course_student (AutoNumber,coursename,period,sponsorname) 
				values('$auto','$coursename','$period','$sponsorname')";
                
                $sql=mysql_query($insert,$con); //this function excecutes our query
				 echo "Data Saved Successfully".mysql_error();
		header("Location:alldata.php");
		
                 if(!$sql){
                    
                    echo "failed to insert data".mysql_error();
                    
                }
		 
        }
        
        else{
            
          //  echo "none of the fields should be left blank";
        }
        
        ?>
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