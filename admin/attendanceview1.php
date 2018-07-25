<?php

 
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
include ("header.php");
 
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

</head>
<body style="background-color:powderblue">
<div class="form" align="center">

<a href="add.php">INSERT</a>
<br><br><br>
<h2>VIEW ATTENDANCE</h2>
<table width="78%" border="1" style="border-collapse:collapse;" align="right">
<thead>
<tr>

<th><strong>count</strong></th>
<th><strong>id</strong></th>
<th><strong>First name</strong></th>
<th><strong>Last name</strong></th>
<th><strong>Class</strong></th>
<th><strong>Section</strong></th>
<th><strong>Attendance</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php

if(isset($_POST['register']))
{
 $class=$_REQUEST["class"];
 $sec=$_REQUEST["section"];
$count=1;
$sel_query="Select * from tbl_attendance where class='$class' and sec='$sec';";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["s_id"]; ?></td>
<td align="center"><?php echo $row["f_Name"]; ?></td>
<td align="center"><?php echo $row["l_Name"]; ?></td>
<td align="center"><?php echo $row["class"]; ?></td>
<td align="center"><?php echo $row["sec"]; ?></td>
<td align="center"><?php echo $row["attendance"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["s_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["s_id"];?>&class=<?php echo $row['class'];?>">Delete</a>
</td>
</tr>
<?php $count++; } }?>
</tbody>
</table>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>