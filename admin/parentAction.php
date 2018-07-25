<?php 
 
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 $pname= $_REQUEST["pname"];
 $sid= $_REQUEST["id"];
 $phone=$_REQUEST['phone'];
 $email=$_REQUEST['email'];
 $uname= $_REQUEST["uname"];
 $pass= $_REQUEST["password"];
 
 include ("header.php");
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 
 
 $sql="INSERT INTO `tbl_user`  VALUES ('','$uname', '$pass','parent',1)";
 if($conn->query($sql)=="TRUE"){
	// echo "run successfully";
	 
 }
 
 
 
 
 $sql="select id from tbl_user where username='$uname'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$id=$row['id'];
//echo $id;
 
 
 
 
 $sql1="INSERT INTO `tbl_pdetails` (`parent_no`, `p_id`, `parent_name`, `s_id`, `phone`, `pemail`, `status`) VALUES (' ', '$id', '$pname', '$sid', '$phone', '$email', '1')";
     if($conn->query($sql1)=="TRUE"){
	 include("parentedit1.php");
	 
 }
 
  $sql2="INSERT INTO `tbl_relation_sp` (`s_id`, `p_id`, `relation`, `status`) VALUES ('$sid', '$id', 'father', '1')";
  if($conn->query($sql2)=="TRUE"){
	 echo "run successfully";
	 
 }

 mysqli_close($conn);
 
  ?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>

