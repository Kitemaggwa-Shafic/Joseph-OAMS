<?php
ob_start();
error_reporting(0);
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
        
		  <?php
		  
				//$cont=$_GET["contacts"];
				if(isset($_POST["sendsms"])){
				$contact=$_GET["contacts"];
           $answers=$_POST["answer"];
	       
$finalnumber="256".$contact;
// Authorisation details
$uname = "kitemaggwas@gmail.com";
$pword = "Visioncollege92";

// Configuration variables
$info = "1";
$test = "0";

// Data for text message
$from = "Uganda Martyrs University";
$selectednums =$finalnumber;
$message =$answers;
$message = urlencode($message);

// Prepare data for POST request in message
$data = "uname=".$uname."&pword=".$pword."&message=".$message."&from=". $from."&selectednums=".$selectednums."&info=".$info."&test=".$test; 

// Send the POST request with cURL
$ch = curl_init('http://www.txtlocal.com/sendsmspost.php');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); //This is the result from Textlocal
curl_close($ch);


//sms ends
if($result){
echo '<script>alert("Message Sent")</script>';

//			     header("Location:http:students.php");

 // Get the main settings from the array we just loaded
        $host = 'localhost';
        $db = 'admission';
        $user = 'root';
        $pass = '';

        // Connect to the database
        $this->link = mysql_connect($host, $user, $pass);
        mysql_select_db($db);
 
//now lets delete that record from databse table
         //      $id=$_GET["contacts"];
                                

         $host = 'localhost';
         $db = 'admission';
         $user = 'root';
         $pass = '';

        // Connect to the database
         $con = mysql_connect($host, $user, $pass);
        mysql_select_db($db,$con);
                            $g= mysql_query("delete from students where contacts='$id'",$con) or die(mysql_error());
			      
                            // header("Location:http://kjsnprofic.com/admission/student.php");
			     header("Location:http:students.php");

}

//if message sending fails do the following
else if(!$result){
echo '<script>alert("Message Sending failed")</script>';

}



}
?>
		
		
		
		
		
		
    <div id="templatemo_content" style="margin-top:-420px;">
        
            <h2 align="center" style="color:#ee0000">Send SMS to Student</h2><br/>
			<form  method="post"  enctype="multipart/form-data" name="frm"  style="margin-left:-100px;">
            <table border="0" cellpadding="0" cellspacing="0" align="center">
			<tr>
			<th>Students Phone Number: </th>
			<th>
	<input type="text" name="snumber" Placeholder="Enter Phone Number e.g 706810364" onkeyup="AllowAlphabet()" style="width:400px; height:30px;" value="<?php echo $row['contacts']; ?>"  required />
			

			</th>
			</tr>
			<br><br/>
			<th>Enter Message:</th>
                               
			 <th><textarea name="answer" style="width:400px; margin-top:15px; height:100px;" class="span5" required ></textarea>
			 </th>
              
                      <tr>
			<th  >&nbsp;</th>
			<th><input type="submit" name="sendsms" style="width:400px; margin-top:15px;; height:30px;" value="Send SMS"   /></th>
			<th>&nbsp;</th>
 			</tr>    
                        </div>
						</table>
                    </form>
		            
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