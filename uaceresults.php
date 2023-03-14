<?php require ('db.php');
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Students Admission System || UACE</title>
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
else if (!frm.year.value.match(/^[0-9]+$/) && frm.year.value !="")
{
frm.year.value="";
frm.year.focus();
alert("Year should be Numeric");
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
        
        <div id="templatemo_content" style="margin-left:-50px;">
        
            <h2 align="center" style="color:#ee0000">Students Application UACE Results</h2><br/>
			<form  method="post"  enctype="multipart/form-data" name="frm" action="uaceresults.php">
            <table border="0" cellpadding="0" cellspacing="0" width="800px" align="center">
			<tr>
			<th>A-Level Index No:</th>
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
			<th >Subject1</th>
			<th>
			<select name="subject1" style="width:300px; margin-left:10px; ">
			<option value="" selected="selected">-------------Select Subject---------------</option>
                                    <option>Maths</option>
                                    <option>Physics</option>
                                    <option>Economics</option>
                                    <option>Chemistry</option> 
                                    <option>Biology</option>
                                    <option>Geography</option> 
                                    <option>History</option>
                                    <option>Art</option>
                                    <option>Computer</option>
                                    <option>Divinty</option>  
                                    <option>Entrepreneurship</option>
             </select>
			</th>
			
			<th>Grade1</th>
			<th>
			<select name="grade1" style="width:150px;">
                                    <option value="" selected="selected">----Select Grade-----</option>
                                    <option>A</option>
                                    <option>B</option> 
                                    <option>C</option>
                                    <option>D</option> 
                                    <option>E</option>
                                    <option>O</option>
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
			<th>subject2.</th>
			<th>
			<select name="subject2" style="width:300px; margin-left:10px; ">
     <option value="" selected="selected">-------------Select Subject---------------</option>
                                    <option>Maths</option>
                                    <option>Physics</option>
                                    <option>Economics</option>
                                    <option>Chemistry</option> 
                                    <option>Biology</option>
                                    <option>Geography</option> 
                                    <option>History</option>
                                    <option>Art</option>
                                    <option>Computer</option>
                                    <option>Divinty</option>  
                                    <option>Entrepreneurship</option> 
                                   

		</select></th>
			
			<th>Grade2</th>
			<th> 	  <select name="grade2" style="width:150px;">
                                    <option value="" selected="selected">----Select Grade-----</option>
                                    <option>A</option>
                                    <option>B</option> 
                                    <option>C</option>
                                    <option>D</option> 
                                    <option>E</option>
                                    <option>O</option>
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
			<th>subject3.</th>
			<th>
			 <select name="subject3" style="width:300px; margin-left:10px; ">
		<option value="" selected="selected">-------------Select Subject---------------</option>
                                    <option>Maths</option>
                                    <option>Physics</option>
                                    <option>Economics</option>
                                    <option>Chemistry</option> 
                                    <option>Biology</option>
                                    <option>Geography</option> 
                                    <option>History</option>
                                    <option>Art</option>
                                    <option>Computer</option>
                                    <option>Divinty</option>  
                                    <option>Entrepreneurship</option>
                                 

		</select></th>
			
			<th>Grade3</th>
			<th> <select name="grade3" style="width:150px;">
                                    <option value="" selected="selected">----Select Grade-----</option>
                                    <option>A</option>
                                    <option>B</option> 
                                    <option>C</option>
                                    <option>D</option> 
                                    <option>E</option>
                                    <option>O</option>
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
			<th>SUB MATHS / COMPUTER:</th>
			<th>
			<select name="grade4" style="width:300px; margin-left:10px; ">
                     <option value="" selected="selected">-----------------Select Grade-----------</option>                         
                                    <option>O</option>
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
			<th  >GENERAL PAPER:</th>
			<th>
			<select name="grade5" style="width:300px; margin-left:10px; ">
                     <option value="" selected="selected">-----------------Select Grade-----------</option>
                                     <option>O</option>
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
               if(isset($_POST["submit"]) && !empty($_POST["index"]) && !empty($_POST["year"])&& !empty($_POST["school"]) && !empty($_POST["subject1"]) && !empty($_POST["grade1"]) && !empty($_POST["subject2"]) && !empty($_POST["grade2"]) && !empty($_POST["subject3"]) && !empty($_POST["grade3"]) && !empty($_POST["grade4"]) && !empty($_POST["grade5"]) ){

           $index=$_POST["index"];  
           $year=$_POST["year"];
           $school=$_POST["school"];
					$subject1=$_POST["subject1"];
	       $grade1=$_POST["grade1"];
                    $subject2=$_POST["subject2"];
	       $grade2=$_POST["grade2"];
                    $subject3=$_POST["subject3"];
	       $grade3=$_POST["grade3"];  
                //  $subject4=$_POST["subject4"];
	       $grade4=$_POST["grade4"];
                  // $subject5=$_POST["subject5"];
	       $grade5=$_POST["grade5"];
                   
                 
                   
                   
                   
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("admission",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
$insert="insert into uace (indexno,year,school,subject1,grade1,subject2,grade2,subject3,grade3,SUB_MATC_COMP,GP ) values('$index','$year','$school','$subject1','$grade1','$subject2','$grade2','$subject3','$grade3','$grade4','$grade5')";

                 $sql=mysql_query($insert,$con); //this function excecutes our query
 				header("Location:course_student.php");
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