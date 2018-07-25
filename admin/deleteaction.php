<?php
//including the database connection file

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result ="DELETE FROM tbl_marks WHERE s_id='$id'";
$res=mysqli_query($conn,$result);
if($conn->query($res)=="TRUE"){
	// echo "run successfully";
	 header("Location:marksview.php");
 }

//redirecting to the display page (index.php in our case)

?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
