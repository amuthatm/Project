<html>
<body style="background-color:powderblue">
<h2 align="center">VIEW ATTENDANCE DETAILS</h2>
<p><a href="home.php">Home</a>
|<a href="home.php">Logout</a></p>
<br><br><br>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","school");
// Check connection
include("header.php");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$class=$_REQUEST["class"];
$sec=$_REQUEST["section"];

$result = mysqli_query($con,"SELECT * FROM tbl_attendance WHERE class='$class' and sec='$sec'");

echo "<table width=\"78%\" border=\"1\" style=\"border-collapse:collapse;\" align=\"right\">
<tr>
<th>student id</th>
<th> Name</th>
<th>attendance</th>
<th>class </th>
<th>section</th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['s_id'] . "</td>";
echo "<td>" . $row['f_Name'] ." ". $row['l_Name']. "</td>";
echo "<td>" . $row['attendance'] . "</td>";
echo "<td>" . $row['class'] . "</td>";
echo "<td>" . $row['sec'] . "</td>";

}
echo "</table>";

mysqli_close($con);
?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>