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


<meta charset="utf-8">
<title>View Records</title>
<head>
<?php    include("header.php");?>

</head>

<body >
<div class="form" align="center">
<br><br><br>
<a href="teditexam.php">INSERT</a>
<br><br><br>
<h2 align="center">VIEW EXAM DETAILS</h2>
<table  width="78%" border="1" style="border-collapse:collapse;" align="right">
<thead style="background-color:yellow">
<tr>


<th><strong>exam no</strong></th>
<th><strong>class</strong></th>
<th><strong>subject</strong></th>
<th><strong>date</strong></th>
<th><strong>Edit</strong></th>

<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody style="background-color:powderblue">
<?php
if(isset($_REQUEST['register']))
{
$class=$_REQUEST['class'];

$count=1;
$sel_query="Select * from tbl_exam where class='$class'";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>

<td align="center"><?php echo $row["e_no"]; ?></td>
<td align="center"><?php echo $row["class"]; ?></td>
<td align="center"><?php echo $row["subject"]; ?></td>
<td align="center"><?php echo $row["date"]; ?></td>

<td align="center">
<a href="examedit.php?id=<?php echo $row["e_no"]; ?>">Edit</a>
</td>
<td align="center">
<a href="examdelete.php?id=<?php echo $row["e_no"];?>&class=<?php echo $row['class'];?>">Delete</a>
</td>
</tr>
<?php $count++; }} ?>
</tbody>
</table>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>