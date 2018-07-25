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
<br><br><br><br>
<a href="adds.php">INSERT</a>
<br><br><br>
<h2>VIEW STAFF</h2>
<table width="78%" border="1" style="border-collapse:collapse;" align="right">
<thead>
<tr>


    <th><strong> Teacher id</strong></th>
    <th><strong>First name</strong></th>
    <th><strong>Last name</strong></th>
    <th><strong>Gender</strong></th>
    <th><strong>Date of Birth</strong></th>
    <th><strong>Address</strong></th>
    <th><strong>Phone</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>Category</strong></th>
    <th><strong>Yos</strong></th>
    <th><strong>Salary</strong></th>
    <th><strong>Edit</strong></th>
    <th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php



$sel_query="Select * from tbl_staff ";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>

    <td align="center"><?php echo $row["t_id"]; ?></td>
    <td align="center"><?php echo $row["ff_name"]; ?></td>
    <td align="center"><?php echo $row["ll_name"]; ?></td>
    <td align="center"><?php echo $row["gender"]; ?></td>
    <td align="center"><?php echo $row["tdob"]; ?></td>
    <td align="center"><?php echo $row["taddress"]; ?></td>
    <td align="center"><?php echo $row["tphone"]; ?></td>
    <td align="center"><?php echo $row["temail"]; ?></td>
    <td align="center"><?php echo $row["category"]; ?></td>
         <td align="center"><?php echo $row["yos"]; ?></td>
         <td align="center"><?php echo $row["salary"]; ?></td>
<td align="center">
<a href="editstaff.php?id=<?php echo $row["t_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deletestaff.php?id=<?php echo $row["t_id"];?>">Delete</a>
</td>
</tr>
<?php   }?>
</tbody>
</table>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>