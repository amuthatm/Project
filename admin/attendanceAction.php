<?php 
 
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";

 

 $id=$_REQUEST["id"];
 $fname=$_REQUEST['fname'];
 $lname=$_REQUEST['lname'];
 $attendance= $_REQUEST["attendance"];
 $date= $_REQUEST["date"];
 $class=$_REQUEST["class"];
 $sec=$_REQUEST["section"];
 
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 



//$sql="select s_id from tbl_studetails where s_id='$id' and class='$class'and sec='$sec'";
//$res=mysqli_query($conn,$sql);
//$row=mysqli_fetch_assoc($res);
//$id=$row['s_id'];



   
 
 
 
 
 $sql3="INSERT INTO `tbl_attendance`(`atn_no`, `s_id`, `f_Name`, `l_Name`, `class`, `sec`, `attendance`, `date`) VALUES ( '','$id','$fname','$lname','$class','$sec','$attendance','$date')";
 
 
     
//	echo ="INSERT INTO `tbl_studetails` ('student_no',`s_id`, `first_name`, `last_name`, `dob`, `gender`, `address`, `phone_no`, `father_name`, `mother_name`, `class`, `sec`, `father_job`, `mother_job`,  `native`) VALUES 
//	('','$id','$fname', ' $lname', '$dob', '$gender', ' $address', '$mobno', ' $father', ' $mother', ' $class', ' $section', ' $fjob', '$mjob', '$state')"; 
 
 
//$result = mysql_query("SELECT s_id FROM `tbl_studetails` WHERE `first_name`=$fname");
 //$name = $mysql->query("SELECT s_id FROM `tbl_studetails` WHERE `first_name`=$fname")->fetch_object()->s_id;  
 //echo $name;
  if($conn->query($sql3)=="TRUE"){
	
	   include("attendanceview.php");
 }


mysqli_close($conn);
 
 
 

 ?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
