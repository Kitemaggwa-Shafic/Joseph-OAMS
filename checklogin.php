<?php
//session_start();
require_once ('db.php');
 if (isset($_POST['submit'])) {
$name = $_POST['uname'];
$Pass = $_POST['pass'];
$c = $_POST['code'];
 $student_name=mysql_query("SELECT * FROM assignments, lecturers where lecturers.lecturer_id=assignments.lecturer_id AND  assignments.unit='$c'");
								while($row1=mysql_fetch_array($student_name)){
								$c= $row1['unit'];
								
								}
                                
$query = mysql_query("SELECT * FROM lecturers, assignments WHERE lecturers.username='$name' AND lecturers.password='$Pass' AND lecturers.lecturer_id=assignments.lecturer_id AND assignments.unit='$c'");
$row= mysql_fetch_array($query);
//$role =$row['course'];


}if($row > 0){
 session_start();
                            
$_SESSION['id'] = $row['teacher_id'];
$_SESSION['code'] = $c;
$_SESSION['name'] = $row['fname'].''.$row['lname'];
echo '<script type="text/javascript">
									var myVar=setInterval(function(){myTimer()},100);

							function myTimer()
							{
								window.location="addscore.php";

								}
							</script>';
session_write_close();
 exit();
			}else
			{
			echo "You are not entitled to teach this lecture".mysql_error();
}
?>
