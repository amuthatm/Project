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
<title>View Records</title>

</head>
<body>
<div class="form" align="center">
    <br><br><br>
<a href="addparent.php">INSERT</a>

<h2>VIEW PARENT DETAILS</h2>
<table width="78%" border="1" style="border-collapse:collapse;"align="right">
<thead style="background-color:yellow">
<tr>


<th><strong>parentid</strong></th>
<th><strong>parent name</strong></th>
<th><strong>sudent id</strong></th>
<th><strong>phone</strong></th>
<th><strong>email</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody style="background-color:powderblue">
<?php
$count=1;
$sel_query="Select * from tbl_pdetails";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>
<tr>
<td align="center"><?php echo $row["p_id"]; ?></td>
<td align="center"><?php echo $row["parent_name"]; ?></td>
<td align="center"><?php echo $row["s_id"]; ?></td>
<td align="center"><?php echo $row["phone"]; ?></td>
<td align="center"><?php echo $row["pemail"]; ?></td>


<td align="center">
<a href="parentedit.php?id=<?php echo $row["s_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="parentdelete.php?id=<?php echo $row["s_id"]; ?>&pid=<?php echo $row['p_id'];?>">Delete</a>
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