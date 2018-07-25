
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Records</title>

</head>
<body style="background-color:powderblue">
<div class="form" align="center">
    <br><br><br>
    <a href="addsubjectteacher.php">INSERT</a>

    <h2>VIEW SUBJECT TEACHER</h2>
</div>
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

$result = mysqli_query($con,"SELECT * FROM tbl_sub WHERE class='$class' and sec='$sec'");

echo "<table width=\"78%\" border=\"1\" style=\"border-collapse:collapse;\" align=\"right\">
<tr>
<th>Teacher id</th>
<th>Teacher Name</th>
<th>class </th>
<th>section</th>
<th>subject</th>


</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['t_id'] . "</td>";
    echo "<td>" . $row['teacher']. "</td>";
    echo "<td>" . $row['class'] . "</td>";
    echo "<td>" . $row['sec'] . "</td>";
    echo "<td>" . $row['sub'] . "</td>";

}
echo "</table>";

mysqli_close($con);
?>
<?php
echo"<BR><BR><BR><BR><BR><BR><BR><BR>";
include("footer.php");
?>