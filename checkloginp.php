 <?php
//session_start();
require_once ('db.php');
 if (isset($_POST['submit'])) {
$name = $_POST['email'];
$Pass = $_POST['password'];
//$c = $_POST['code'];
                               
$query = mysql_query("SELECT * FROM login WHERE emailaddress='$name' AND password='$Pass'");
$row= mysql_fetch_array($query);
//$role =$row['course'];
//$passw = $row['password'];
//$username =$row['username'];
$w = mysql_num_rows($query);
}if($w > 0){
 session_start();
               echo '<font color="#00bc22" size="+1.5"> Correct Username and Password </font>'  ;
                
$_SESSION['id'] = $row['emailaddress'];
$_SESSION['type'] = $row['password'];
echo '<script type="text/javascript">
									var myVar=setInterval(function(){myTimer()},100);

							function myTimer()
							{
								window.location="index1.php";

								}
							</script>';
session_write_close();
 exit();
			}else
			{
			 echo "error".mysql_error();
     echo '<font color="#ff0023" size="+1.5"> Wrong Username and Password Correct! </font>'  ;
   //  echo "<script type='text/javascript'>alert('Wrong username and Password,\n Try again')</script>";
              header("Location:student_login.php");
}
?>
