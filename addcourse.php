<?php
require('db.php');
$cname =$_POST['cname'];
$fname =$_POST['fname'];
$dura =$_POST['year'];
$tt =$_POST['tution'];

$query = mysql_query("INSERT INTO courses VALUES(NULL,'$cname','$fname','$dura', '$tt')");

if($query){
echo '<script type="text/javascript">
									var myVar=setInterval(function(){myTimer()},100);

							function myTimer()
							{
								window.location="courses.php";

								}
							</script>';
}
else
{
echo 'Failed to insert row '.mysql_error();

}
?>
