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
        
            <h2 align="center" style="color:#ee0000">Register New Sponsorship</h2><br/>
			<form  method="post"  enctype="multipart/form-data" name="frm" action="sponsor.php" style="margin-left:-100px;">
            <table border="0" cellpadding="0" cellspacing="0" width="800px" align="center">
			<tr>
 			 
			<th>Sponsorship Name</th>
			<th><input type="text" name="sname" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"   required /></th>
			<th>Renewal:</th>
			<th> <input type="text" name="renew" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"   required /></th>
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
			 
			<th>Sponsorship Type: </th>
			<th><select name="stype" style="width:300px;height:35px" class="form_select">
         <option value="" selected="selected">------Select Sponsorship Type------</option>
          <option>Full</option>
           <option>Half</option>  
            <option>Talent</option> 
           <option>Government</option>
         </select>
		 
		 <th>Period:</th>
			<th> <input type="text" name="period" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"   required /></th>
			
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
 			 
			<th>Contacts</th>
			<th><input type="text" name="contact" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"   required /></th>
			<th>Emailaddress:</th>
			<th> <input type="text" name="email" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"   required /></th>
			</th>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<th  >&nbsp;</th>
			<th><input type="submit" name="submit" style="width:300px; height:30px;" value="Register Faculty"   /></th>
			<th>&nbsp;</th>
			<th><input type="reset" name="submit" style="width:300px; height:30px;" value="Cancel"   /></th>
			</tr>
			
			
			</table>
			</form>
			
			<?php
               if(isset($_POST["submit"])  && !empty($_POST["sname"]) && !empty($_POST["renew"]) && !empty($_POST["stype"]) && !empty($_POST["period"])&& !empty($_POST["contact"]) && !empty($_POST["email"]) ){

		 
           $sname=$_POST["sname"];  
           $renew=$_POST["renew"];
           $stype=$_POST["stype"];
           $period=$_POST["period"];
                   $contact=$_POST["contact"];
				   $email=$_POST["email"];
                
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("admission",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
$insert="insert into sponsorship (sponsorname,renewal,sponsortype,period,contacts,email) values('$sname','$renew','$stype','$period','$contact','$email')";

                
                $sql=mysql_query($insert,$con); //this function excecutes our query
				header("Location:indexadmin.php");
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