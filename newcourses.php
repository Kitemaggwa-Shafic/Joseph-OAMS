<?php require ('db.php');
ob_start();
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

        <div id="templatemo_menu">
         <?php
			include('menuadmin.php');
			?>
        </div> <!-- end of templatemo_menu -->
    
    	<div class="cleaner"></div>
  </div> <!-- end of templatmeo_header -->
    
    <div id="templatemo_main">
    
        <div   style="margin-left:-850px;">
        
        	
            <div class="cleaner_h30"></div>
            
        	<h3 style="margin-left:750px; margin-top:-30px;">Menu Navigation</h3>
        
            <?php include('sidebaradmin.php'); ?>
        	
        
        
        </div> <!-- end of templatemo_sidebar -->
        
        <div id="templatemo_content" style="margin-top:-420px;">
        
            <h2 align="center" style="color:#ee0000">Register New Courses</h2><br/>
			<form  method="post"  enctype="multipart/form-data" name="frm" action="newcourses.php" style="margin-left:-100px;">
            <table border="0" cellpadding="0" cellspacing="0" width="800px" align="center">
			<tr>
 			 
			<th>Course Name</th>
			<th><input type="text" name="cname" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"   required /></th>
			<th >Faculty</th>
			<th> <select name="faculty" style="width:300px;height:35px" class="form_select" style="width:450px;height:25px" class="form-control" >
			<option>---------------Select Faculty------------------</option>
			<?php require ('db.php');
			$qry =mysql_query("select * from  faculty");
			while ($row = mysql_fetch_array($qry)){
			?>
			<option name="faculty" value="<?php echo $row['facultyname']; ?>"><?php echo $row['facultyname']; ?></option>
			<?php
			}
			?></select></th>
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
			 
			<th>Period of Study</th>
			<th><input type="text" name="period" style="width:300px; height:30px;"  required /></th>
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
			<th><input type="submit" name="submit" style="width:300px; height:30px;" value="Register Course"   /></th>
			<th>&nbsp;</th>
			<th><input type="reset" name="submit" style="width:300px; height:30px;" value="Cancel"   /></th>
			</tr>
			
			
			</table>
			</form>
			
			<?php
               if(isset($_POST["submit"])  && !empty($_POST["cname"]) && !empty($_POST["faculty"]) && !empty($_POST["period"])  ){

		 
           $cname=$_POST["cname"];  
           $faculty=$_POST["faculty"];
           $period=$_POST["period"];
           
                   
                
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("admission",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
$insert="insert into courses (coursename,faculty,period) values('$cname','$faculty','$period')";

                
                $sql=mysql_query($insert,$con); //this function excecutes our query
				header("Location:courses.php");
		                echo "Student Successfuly Registered".mysql_error();

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