<?php require ('db.php');
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Students Admission System || UCE</title>
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
           
<ul>
             <?php include('menustudent.php');
		   ?>
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
        
            <h2 align="center" style="color:#ee0000">Application Form UCE Results</h2><br/>
			<form  method="post"  enctype="multipart/form-data" name="frm" action="uceresults.php">
            <table border="0" cellpadding="0" cellspacing="0" width="800px" align="center">
			<tr>
			<th>O-Level Index No:</th>
			<th><input type="text" name="index" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"   required /></th>
			<th>Year of sitting:</th>
			<th><input type="text" name="year" onkeyup="AllowAlphabet()" style="width:300px; height:30px;"  required />
			</th></tr>
			<tr> 
			<th>School:</th>
			<th><input type="text" name="school" onkeyup="AllowAlphabet()" style="width:300px; height:30px; margin-top:10px;"  required /></th>	
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
			<th >MATHEMATICS:</th>
		<th> <select name="grade1" style="width:300px; margin-left:-1px;">
                                    <option value="" selected="selected">----Select Grade-----</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option> 
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
			<th  >ENGLISH:</th>
			<th>
      <th> <select name="grade2" style="width:300px; margin-left:-380px;">
                                    <option value="" selected="selected">----Select Grade-----</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option> 
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
			<th  >PHYSICS:</th>
			<th>
			<select name="grade3" style="width:300px; margin-left:10px; ">
     <option value="" selected="selected">-------------Select Grade---------------</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option> 
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
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			<tr>
			<th  >CHEMISTRY:</th>
			<th>
			<select name="grade4" style="width:300px; margin-left:10px; ">
     <option value="" selected="selected">-------------Select Grade---------------</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option>
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
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			<tr>
			<th  >BIOLOGY:</th>
			<th>
			<select name="grade5" style="width:300px; margin-left:10px; ">
    <option value="" selected="selected">-------------Select Grade---------------</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option>  
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
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			<tr>
			<th  >GEOGRAPHY:</th>
			<th>
			<select name="grade6" style="width:300px; margin-left:10px; ">
     <option value="" selected="selected">-------------Select Grade---------------</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option> 
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
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			<tr>
			<th  >HISTORY:</th>
			<th>
			<select name="grade7" style="width:300px; margin-left:10px; ">
    <option value="" selected="selected">-------------Select Grade---------------</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option> 
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
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			<tr>
			<th  >COMMERCE:</th>
			<th>
			<select name="grade8" style="width:300px; margin-left:10px; ">
    <option value="" selected="selected">-------------Select Grade---------------</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option> 
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
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			<tr>
			<th  >COMPUTER:</th>
			<th>
			<select name="grade9" style="width:300px; margin-left:10px; ">
     <option value="" selected="selected">-------------Select Grade---------------</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option>  
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
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			<tr>
			<th  >FINE ART:</th>
			<th>
			<select name="grade10" style="width:300px; margin-left:10px; ">
             <option value="" selected="selected">----Select Grade-----</option>
                                    <option>D1</option>
                                    <option>D2</option> 
                                    <option>C3</option>
                                    <option>C4</option> 
                                    <option>C5</option>
                                    <option>C6</option>
                                    <option>P7</option>
                                    <option>P8</option>
                                    <option>F9</option> 
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
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
		
		 
			<tr>
			<th  >&nbsp;</th>
			<th><input type="submit" name="submit" style="width:300px; height:30px;" value="Next"   /></th>
			<th>&nbsp;</th>
			<th><input type="reset" name="submit" style="width:300px; height:30px;" value="Cancel"   /></th>
			</tr>
			
			
			</table>
			</form>
			
			   <?php
               if(isset($_POST["submit"]) ){
           $index=$_POST["index"];  
           $year=$_POST["year"];
           $school=$_POST["school"];
				//	$subject1=$_POST["subject1"];
	       $grade1=$_POST["grade1"];
                //    $subject2=$_POST["subject2"];
	       $grade2=$_POST["grade2"];
                //    $subject3=$_POST["subject3"];
	       $grade3=$_POST["grade3"];  
                //  $subject4=$_POST["subject4"];
	       $grade4=$_POST["grade4"];
                //   $subject5=$_POST["subject5"];
	       $grade5=$_POST["grade5"];
                //   $subject6=$_POST["subject6"];
	       $grade6=$_POST["grade6"];
                //   $subject7=$_POST["subject7"];
	       $grade7=$_POST["grade7"];
                //   $subject8=$_POST["subject8"];
	       $grade8=$_POST["grade8"];
                //   $subject9=$_POST["subject9"];
	       $grade9=$_POST["grade9"];
                //   $subject10=$_POST["subject10"];
	       $grade10=$_POST["grade10"];
                   
                   
                   
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("admission",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
$insert="insert into uce  values(NULL,'$index','$year','$school','$grade1','$grade2','$grade3','$grade4','$grade5','$grade6','$grade7','$grade8','$grade9','$grade10')";

                 $sql=mysql_query($insert,$con); //this function excecutes our query
 				header("Location:uaceresults.php");
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