<?php

 
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
include("header.php");
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>profile</title>

</head>
<body>
    <br><br><br>

<h2>PROFILE</h2>
<table width="78%" border="1" align="right";" >
<thead style="background-color:white">

<?php

$sel_query="Select * from tbl_admin";
$result = mysqli_query($conn,$sel_query);

while($row = mysqli_fetch_array($result)) {
	?>



<tr><th><strong>&nbsp;&nbsp;&nbsp;Admin ID</strong></th><td align="center"><?php echo $row["admin_id"]; ?></tr>
<tr><th><strong>&nbsp;&nbsp;&nbsp;Name</strong></th><td align="center"><?php echo $row["admin_name"]; ?></td></tr>
<tr><th><strong>&nbsp;&nbsp;&nbsp;Designation</strong></th><td align="center"><?php echo $row["admin_designation"]; ?></td></tr>
<tr><th><strong>&nbsp;&nbsp;&nbsp;Email</strong></th><td align="center"><?php echo $row["admin_email"]; ?></td></tr>
</tr>
</thead>
<tbody style="background-color:powderblue">
</tbody>
</table>


<?php
 }
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>