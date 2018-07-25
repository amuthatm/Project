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

<a href="addsubjectteacher.php">INSERT</a>
<br><br><br>
<h2>VIEW SUBJECT TEACHERS</h2>
<table width="78%" border="1" style="border-collapse:collapse;" align="right">
<thead>
<tr>


     <th><strong> Teacher id</strong></th>
    <th><strong>Teacher  name</strong></th>
    <th><strong>Class</strong></th>
    <th><strong>Section</strong></th>
    <th><strong>Subject</strong></th>
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

$sel_query="Select * from tbl_sub where class='$class' and sec='$sec';";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>

    <td align="center"><?php echo $row["t_id"]; ?></td>
     <td align="center"><?php echo $row["teacher"]; ?></td>
     <td align="center"><?php echo $row["class"]; ?></td>
     <td align="center"><?php echo $row["sec"]; ?></td>
     <td align="center"><?php echo $row["sub"]; ?></td>

<td align="center">
<a href="edit3.php?id=<?php echo $row["t_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete3.php?id=<?php echo $row["sub_id"];?>&class=<?php echo $row['class'];?>">Delete</a>
</td>
</tr>
<?php  } }?>
</tbody>
</table>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>