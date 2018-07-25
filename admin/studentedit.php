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
    <style>
    .nav
    {
    padding-top: 20px;
    }
    .nav a
    {
    display: block;
    width: 5%;
    background-color:darkslategray;
    color: white;
    padding: 12px 14px;
    text-align: center;
    }
    .nav a:hover
    {
    background-color: #00b5e9;
    color: white;
    }
    </style>

</head>
<body>
<div class="form" align="center">
    <br><br><br>
<a href="addstudent.php">INSERT</a>
<h2 align="center">VIEW STUDENT DETAILS</h2>
<table table width="78%" border="1" style="border-collapse:collapse;" align="center">
<thead style="background-color:yellow">
<tr>


<th><strong>id</strong></th>
<th><strong>F_name</strong></th>
<th><strong>L_name</strong></th>
<th><strong>Gender</strong></th>
<th><strong>Dob</strong></th>
<th><strong>Address</strong></th>
<th><strong>Native</strong></th>
<th><strong>F_name</strong></th>
<th><strong>M_name</strong></th>
<th><strong>F_job</strong></th>
<th><strong>M_job</strong></th>
<th><strong>Phone</strong></th>
<th><strong>class</strong></th>
<th><strong>section</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody style="background-color:powderblue">
<?php
$count=1;
if(isset($_POST['register']))
{
 $class=$_REQUEST["class"];
 $sec=$_REQUEST["section"];
$sel_query="Select * from tbl_studetails where class='$class'and sec='$sec'";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>

<td align="center"><?php echo $row["s_id"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["gender"]; ?></td>
<td align="center"><?php echo $row["dob"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["native"]; ?></td>
<td align="center"><?php echo $row["father_name"]; ?></td>
<td align="center"><?php echo $row["mother_name"]; ?></td>
<td align="center"><?php echo $row["father_job"]; ?></td>
<td align="center"><?php echo $row["mother_job"]; ?></td>
<td align="center"><?php echo $row["phone_no"]; ?></td>
<td align="center"><?php echo $row["class"]; ?></td>
<td align="center"><?php echo $row["sec"]; ?></td>
<td align="center">
<a href="edit1.php?id=<?php echo $row["s_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete1.php?id=<?php echo $row["s_id"];?>&class=<?php echo $row['class'];?>">Delete</a>
</td>
</tr>
<?php $count++; }} ?>
</tbody>
</table>
</div>
<div class="nav" align="center">
    <a style='text-align: center' href='addStudent.php'>BACK</a>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>