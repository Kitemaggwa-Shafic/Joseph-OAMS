<?php
ob_start();
?>
 <?php      
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();             
                }   
                $selectdb=mysql_select_db("admission",$con);
                
                if(!$selectdb){      
                    echo "failed to select database".mysql_error();    
                }
                
                $select="select * from student ";
                
                $sql=mysql_query($select,$con); //this function excecutes our query
           
  
                                      ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Students Admission System || New Student</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript">
function AllowAlphabet(){
if (!frm.fname.value.match(/^[a-zA-Z]+$/) && frm.fname.value !="")
{
frm.fname.value="";
frm.fname.focus();
alert("First Name should be alphabet");
}
else if (!frm.lname.value.match(/^[a-zA-Z]+$/) && frm.lname.value !="")
{
frm.lname.value="";
frm.lname.focus();
alert("Last Name should be alphabet");
}
else if (!frm.tel.value.match(/^[0-9]+$/) && frm.tel.value !="")
{
frm.tel.value="";
frm.tel.focus();
alert("Contacts should be Numeric");
}
else if (!frm.age.value.match(/^[0-9]+$/) && frm.age.value !="")
{
frm.age.value="";
frm.age.focus();
alert("Age should be Numeric");
}}
</script>
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

        <div id="templatemo_menu" style="width:800px;">
         <?php
			include('menuadmin.php');
			?>
        </div> <!-- end of templatemo_menu -->
    
    	<div class="cleaner"></div>
  </div> <!-- end of templatmeo_header -->
    
    <div id="templatemo_main">
    
        <div   style="margin-left:-650px;">
        
        	
            <div class="cleaner_h30"></div>
            
        	<h3 style="margin-left:670px; margin-top:-30px;">Menu Navigation</h3>
        
            <?php include('sidebaradmin.php'); ?>
        	
        
        
        </div> <!-- end of templatemo_sidebar -->
        
        <div id="templatemo_content" style="margin-top:-420px;">
        
            <h2 align="center">UMU Registered Students with the System</h2><br/>
            <table border="0" cellpadding="10" cellspacing="0" width="1000px" align="center">
			<tr bgcolor="#000066" style="color:#FFFFFF">
 			<th>System Number</th>
			<th>Full Name</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Contacts.</th>
			<th>Marital Status</th>
			<th>Course Offered</th>
			<th>Sponsor</th>
			<th>Photo</th>
			<th>Send SMS</th>
 			</tr>
			<tbody>
		 
		 
		 
   
              
		 
			
			 <?php
include("db.php");

$generate="SELECT student.firstname,student.lastname,student.gender,student.DOB, student.contacts,student.maritalstatus,student.image, course_student.AutoNumber,course_student.coursename, course_student.sponsorname
FROM
student
LEFT JOIN
course_student
ON student.AutoNumber=course_student.AutoNumber
 
GROUP BY student.AutoNumber";

$fetch=mysql_query($generate);
    					 
					$sno =0;
                     while ($row = mysql_fetch_array($fetch)) {
					$sno++;
					$color=($sno%2==0)?"lightblue":"white";
                     ?>

		 
					<tr bgcolor="<?php echo $color;?>" style="color:#000000">
					
			<td><?php echo $row['AutoNumber']; ?></td>
 			<td><?php echo $row['firstname'].'  '.$row['lastname']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['DOB']; ?></td>
			<td><?php echo $row['contacts']; ?></td>
			<td><?php echo $row['maritalstatus']; ?></td>
			<td><?php echo $row['coursename']; ?></td>
			<td><?php echo $row['sponsorname']; ?></td>
			<td><img  src="<?php echo $row['image']; ?>" height="65" width="65"></td>
			
 			<td><a href="sendsms.php">Send Sms</a></td>
  			<!--<td><a href="sendsms.php">Send Sms</a></td>
			-->
 
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