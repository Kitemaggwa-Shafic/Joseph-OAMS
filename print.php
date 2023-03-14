 <html>
  <head><title>Admission Report</title>
    </head>
  <body>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<div style="margin-left:50px; margin-top:50px;">
<a href="javascript:Clickheretoprint()">Print Admission Now</a>
</div>
<div id="print_content">
 
 <?php
include("db.php");

$generate="SELECT student.firstname,student.lastname, student.contacts, faculty.facultyname, course_student.coursename
FROM
student
LEFT JOIN
course_student
ON student.Id=course_student.id
LEFT JOIN
faculty
ON faculty.id=course_student.id
where student.Id";

$fetch=mysql_query($generate);
while($row=mysql_fetch_array($fetch)or die(mysql_error()))
{
?>
<html>
    <head><title>Student Report</title>

	</head>
	<body style="background-color:rgb(125, 181, 222); color:rgb(00, 12, 7); font-family:Times New Roman; font-size:20px">
	<div style="margin-left:200px; margin-top:100px; font-size:20px; font-family:Sergio Print;">
	<img src="images/line2.jpg" style="width:100px; height:20px;" />
	<br/>

		UGANDA <?php echo "<br />"; ?> MARTYRS <?php echo "<br />"; ?> UNIVERSITY

</div>
<div style="margin-left:400px;font-size:20px;">
 <i>making a difference </i>
   </div>           
<div style="margin-left:200px; margin-top:10px;">
    <img src="images/logo.png" style="margin-left:630px; margin-top:-140px; width:350px;height:120px;" />
<img src="images/line2.jpg" style="width:980px;" />
  </div>
 <?php echo "<br />"; ?>
<div style="margin-left:850px;"><strong>Office of the Academic Registrar</strong>

</div>
<div style="margin-left:200px;"><i>Your ref.:</i>
</div>
<div style="margin-left:200px;"><i>Our ref.:</i>  <?PHP echo $row['coursename']; ?> 
<?php echo "<br />"; ?><strong><?PHP echo $row['firstname']; ?><br/>
<i><?PHP echo $row['contacts']; ?></i></strong>
<br>
</div>
<br />
 <div style="margin-left:200px;">
 <div style="font-size:20px;">Dear Mr/Miss  
<strong><?PHP echo $row['firstname']; ?></strong>  
</div>
<?php echo "<br />"; ?>
I am pleased to inform you that you have been selected to Study at Uganda Martyrs University, in the<strong><u> Faculty
<?PHP echo $row['facultyname']; ?></u></strong> <br />for a course leading to the award of a 
<strong><u><?PHP echo $row['coursename']; ?></u> </strong>. This course will take a minimum of three<br /> years with two semesters each.
You have been admitted on the basis of O and A levels for the results you have submitted. These and<br /> other qualifications you have
submitted will be verified at the time of registration against your originals which you must present.
<?php echo "<br />"; ?> <br/>
You are required to bring with you the following requirements when reporting:
<ul>
<li>Identity card from former school / former employer</li>
<li>Original  certificates / result slips</li>
<li>Four passport photos</li>
</ul>
<br/> 
We look forward to welcoming you at Uganda Martyrs University, Kabaale Campus and wish you a very happy stay.<br/>
Yours sincerely,<br/><br/>
<strong>Mr. Twinomugisha Slivunus <br/>
REGISTRAR</strong> 
 

<?php echo "<br />"; ?>
<?PHP } ?>
</div>
</body>
</html>