
<?php

 include("header.php");
 
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

</head>
<body>
	<div class="form" align="center">
    <br><br><br>
	<a href="addmarks.php">INSERT</a>
       <br><br><br>
		<h2>VIEW MARKS</h2>
		<table width="78%" border="1" style="border-collapse:collapse;" align="right">
			<thead style="background-color:yellow">
			<tr>


				<th><strong>id</strong></th>
				<th><strong>Class</strong></th>
				<th><strong>Section</strong></th>
				<th><strong>Subject1</strong></th>
				<th><strong>Subject2</strong></th>
				<th><strong>Subject3</strong></th>
				<th><strong>Subject4</strong></th>
				<th><strong>Subject5</strong></th>

				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
			</tr>
			</thead>
			<tbody style="background-color:powderblue">
<?php
 
 if(isset($_POST['register']))
 {
	 
	 $class=$_REQUEST['class'];
	$section=$_REQUEST['section'];
 
	$count=1;
	$sel_query="Select * from tbl_marks where class='$class' and sec='$section'";
	$result = mysqli_query($conn,$sel_query);
	while($row = mysqli_fetch_array($result)) 
	{ 
	?>

	<td align="center"><?php echo $row["s_id"]; ?></td>
	<td align="center"><?php echo $row["class"]; ?></td>
	<td align="center"><?php echo $row["sec"]; ?></td>
	<td align="center"><?php echo $row["sub1"]; ?></td>
	<td align="center"><?php echo $row["sub2"]; ?></td>
	<td align="center"><?php echo $row["sub3"]; ?></td>
	<td align="center"><?php echo $row["sub4"]; ?></td>
	<td align="center"><?php echo $row["sub5"]; ?></td>

	<td align="center">
		<a href="marksedit.php?id=<?php echo $row["s_id"]; ?>">Edit</a>
	</td>
<td align="center">
<a href="marksdelete.php?id=<?php echo $row["s_id"];?>&class=<?php echo $row['class'];?>">Delete</a>
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