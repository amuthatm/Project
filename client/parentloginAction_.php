
 <?php 
 
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 
 
 
 
 
 $pname= $_REQUEST["pname"]; 
 $s_id= $_REQUEST["s_id"]; 
 $p_uname= $_REQUEST["p_uname"]; 
 $p_password= $_REQUEST["p_password"];
 $relation= $_REQUEST["relation"];

 
 
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
	echo $sql="INSERT INTO `tbl_pdetails` (`p_id`, `parent_name`, `s_id`, `status`) VALUES ('', '$pname', '$s_id', 1)"; 
 
 
//$result = mysql_query("SELECT s_id FROM `tbl_studetails` WHERE `first_name`=$fname");
 //$name = $mysql->query("SELECT s_id FROM `tbl_studetails` WHERE `first_name`=$fname")->fetch_object()->s_id;  
 //echo $name;
  if($conn->query($sql)=="TRUE"){
	 echo "run successfully";
	 
 }

$sql="select p_id from tbl_pdetails where s_id='$s_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$id=$row['p_id'];
echo $id;

$sql="INSERT INTO `tbl_user`  VALUES ('$id','$p_uname', '$p_password','parent',1)";
if($conn->query($sql)=="TRUE"){
	 echo "run successfully";
	 
 }
  
  
  
  
  
  
  
  
  
  
  
  
  
mysqli_close($conn);
 
 ?>