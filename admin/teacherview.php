<html>
<body style="background-color:powderblue">
<h2>VIEW TEACHER DETAILS</h2>
<p><a href="home.php">Home</a>
|<a href="index.php">Logout</a></p>
<br><br><br>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","school");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql="SELECT * FROM `tbl_staff`";
$result=mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Teacher id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Date of Birth</th>
<th>Gender</th>
<th>Address</th>
<th>Phone no</th>
<th>Category</th>
<th>Years of Experience</th>
<th>Salary</th>



</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>"  .$row['t_id'] .  "</td>";
echo "<td>" . $row['ff_name'] . "</td>";
echo "<td>" . $row['ll_name'] . "</td>";
echo "<td>" . $row['tdob'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['taddress'] . "</td>";
echo "<td>" . $row['tphone'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['yos'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";



echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>