 <?php
               if(isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["name"])&& !empty($_POST["password"]) && !empty($_POST["cpassword"])  ){

           $email=$_POST["email"];  
           $name=$_POST["name"];
           $password=$_POST["password"];
           $cpassword=$_POST["cpassword"];
	       
                
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("admission",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
$insert="insert into login (emailaddress,fullname,password,cpassword ) values('$email','$name','$password','$cpassword')";

                 $sql=mysql_query($insert,$con); //this function excecutes our query
 				header("Location:login_student.php");
		             echo "Student Successfuly Registered".mysql_error();

                 if(!$sql){
                    
                    echo "failed to insert data".mysql_error();
                    
                }
		 
        }
        
        else{
            
          //  echo "none of the fields should be left blank";
        }
        
        ?>