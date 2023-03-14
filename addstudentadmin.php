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

        <div id="templatemo_menu" >
           <?php
		   include('menuadmin.php');
		   ?>
        </div> <!-- end of templatemo_menu -->
    
    	<div class="cleaner"></div>
  </div> <!-- end of templatmeo_header -->
    
    <div id="templatemo_main">
    
        <div   style="margin-left:-850px;">
        
    
        	<h3 style="margin-left:750px">Menu Navigation</h3>
        
              <?php include('sidebaradmin.php'); ?>
        	
        
        </div> <!-- end of templatemo_sidebar -->
        
		
        <div id="templatemo_content" style="margin-top:-410px;">
        
            <h2 align="center" style="color:#ee0000">New Student</h2><br/>
			<form  method="post"  enctype="multipart/form-data" name="frm" action="addstudentadmin.php" style="margin-left:-170px;">
            <table border="0" cellpadding="0" cellspacing="0" width="800px" align="center">
			<tr>
 			<th>System Generated Number: 
			</th>
	
			<th><input type="text" name="no" disabled  style="width:300px; height:30px;" value="<?php include('autonumber.php'); ?>" enable="false" required />
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
			
			<th>First Name</th>
			<th><input type="text" name="fname" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"   required /></th>
			<th>Other Names</th>
			<th><input type="text" name="lname" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"  required /></th>
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
			<th >Gender</th>
			<th><select name="gd" style="width:300px; height:30px;"  required >
			<option>------------------Select Gender-------------------</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			</select></th>
			
			<th>Date of Birth</th>
			<th><input type="date" name="dob" style="width:300px; height:30px;"  required /></th>
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
			<th  >Contacts.</th>
			<th><input type="text" name="tel" onkeyup="AllowAlphabet()" style="width:300px; height:30px; text-transform:uppercase;"   required /></th>
			
			<th >Marital Status</th>
			<th><select name="ms" style="width:300px; height:30px;"  required >
			<option>----------------Select Option---------------------</option>
			<option value="single">Single</option>
			<option value="married">Married</option>
			<option value="divorced">Divoced</option>			 
			</select></th>
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
			<th>Age.</th>
			<th><input type="text" name="age" style="width:300px; height:30px; text-transform:uppercase;"   required /></th>
			
			<th >Nationality</th>
			<th>
			<select name="nation" style="width:300px; height:30px;"  required >
			<option>----------------Select Option----------------------</option>
			<option>Ugandan</option>
             <option>Kenyan</option>
              <option>Tanzanian</option>
			</select>
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
			
			<th>Photo</th>
			<th><input type="file" name="image" style="width:300px; height:33px; font-size:18px;" required />
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
			<th  >&nbsp;</th>
			<th><input type="submit" name="submit" style="width:300px; height:35px; font-size:18px;" value="Next"   /></th>
			<th>&nbsp;</th>
			<th><input type="reset" name="submit" style="width:300px; height:35px; font-size:18px;" value="Cancel"   /></th>
			</tr>
			
			
			</table>
			</form>
			
			
			
			
			<?php
               if(isset($_POST["submit"])  ){

		   $auto=$_POST["no"];
           $fname=$_POST["fname"];  
           $lname=$_POST["lname"];
           $gd=$_POST["gd"];
           $dob=$_POST["dob"];
	       $tel=$_POST["tel"];
	       $ms=$_POST["ms"];
	       $age=$_POST["age"];
		   $nation=$_POST["nation"];
                
                   
                   $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                   $image_name = addslashes($_FILES['image']['name']);
                   $image_size = getimagesize($_FILES['image']['tmp_name']);
                   
move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
                   
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("admission",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
 $insert="insert into student values(NULL,'$auto','$fname','$lname','$gd','$dob','$tel','$ms','$age','$nation','$location')";


                
                $sql=mysql_query($insert,$con); //this function excecutes our query
				header("Location:viewstudents.php");
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
</div>
</div>
</div

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>