<?php
// including the database connection file

//including the database connection file

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 
 include ("header.php");
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 

if(isset($_POST['register']))
   {	
	
	$id=$_POST['id'];
	$class=$_POST['class'];
	$subject=$_POST['subject'];	
	$date=$_POST['date'];
		 

	
	 
		//updating the table
	
		$result ="INSERT INTO `tbl_exam` (`e_no`,`class`, `subject`, `date`) VALUES (' ','$class', '$subject', '$date')";
	//	$res=mysqli_query($conn,$result);
			
           if($conn->query($result)=="TRUE"){
	             
			 
				  
	              include("exam.php");
			
			}
				 
		   }  				  		  
	



?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
