<?php

 
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="home.php">Home</a> 
|<a href="addteacher.php">insert</a>
|<a href="index.php">Logout</a></p>
<h2>VIEW TEacher DETAILS</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead style="background-color:yellow">
<tr>

<th><strong>count</strong></th>
<th><strong>id</strong></th>
<th><strong>First name</strong></th>
<th><strong>Last name</strong></th>
<th><strong>Gender</strong></th>
<th><strong>Date of Birth</strong></th>
<th><strong>address</strong></th>
<th><strong>category</strong></th>
<th><strong>yos</strong></th>
<th><strong>salary</strong></th>
<th><strong>phone</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody style="background-color:powderblue">
<?php
$count=1;
 
$sel_query="Select * from tbl_staff";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["t_id"]; ?></td>
<td align="center"><?php echo $row["ff_name"]; ?></td>
<td align="center"><?php echo $row["ll_name"]; ?></td>
<td align="center"><?php echo $row["gender"]; ?></td>
<td align="center"><?php echo $row["tdob"]; ?></td>
<td align="center"><?php echo $row["taddress"]; ?></td>
<td align="center"><?php echo $row["tphone"]; ?></td>
<td align="center"><?php echo $row["category"]; ?></td>
<td align="center"><?php echo $row["yos"]; ?></td>
<td align="center"><?php echo $row["salary"]; ?></td>
<td align="center">
<a href="teacheredit.php?id=<?php echo $row["t_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="teacherdelete.php?id=<?php echo $row["t_id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>