 <?php
//session_start();
require_once ('db.php');
 if (isset($_POST['submit'])) {
$name = $_POST['username'];
$Pass = $_POST['password'];
   //  $type = $_POST['usertype'];
//$c = $_POST['code'];
                               
$query = mysql_query("SELECT * FROM administrator WHERE username='$name' AND password='$Pass'");
$row= mysql_fetch_array($query);
//$role =$row['course'];
//$passw = $row['password'];
//$username =$row['username'];
$w = mysql_num_rows($query);
}if($w > 0){
 session_start();
   echo '<font color="#00bc22" size="+1.5"> Correct Username and Password </font>'  ;
     
 //    echo "<script type='text/javascript'>alert('Correct username and Password,\n Try again')</script>";

	echo "<BR>";
$_SESSION['id'] = $row['username'];
$_SESSION['type'] = $row['password'];
echo '<script type="text/javascript">
									var myVar=setInterval(function(){myTimer()},100);

							function myTimer()
							{
                            
								window.location="indexadmin.php";

								}
							</script>';
session_write_close();
 exit();
			}else
			{
  echo '<font color="#ff2c33" size="+1.5"> Wrong username and Password,\n Try again</font>'.mysql_error();
//echo "<script type='text/javascript'>alert('Wrong username and Password,\n Try again')</script>";
        header("Location:admin_login.php");
       
}
?>

