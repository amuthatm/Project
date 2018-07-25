<?php
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
 

//getting id of the data from url
$id = $_GET['id'];
$id1=$_GET['pid'];
//deleting the row from table
$result ="DELETE FROM tbl_pdetails WHERE s_id=$id";
$res=mysqli_query($conn,$result);

$result4 ="DELETE FROM tbl_relation_sp WHERE s_id=$id";
$res4=mysqli_query($conn,$result4);

$result3="UPDATE tbl_user SET status='0' where id='$id1'";
$res3 = mysqli_query($conn,$result3);
if($conn->query($res)=="TRUE"){

	 
 }
 
 

//redirecting to the display page (index.php in our case)
include("parentedit1.php");
?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
