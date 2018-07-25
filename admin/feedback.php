<html>
<body style="background-color:powderblue">
<br><br><br>
<h2 align="center"> VIEW FEEDBACK DETAILS</h2>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","school");
include ("header.php");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tbl_feedback ");
echo"<br><br>";
echo "<table width=\"78%\" border=\"1\" style=\"border-collapse:collapse;\" align=\"right\">
<tr>
<th>Feedback id</th>
<th>Feedback  Name</th>
<th> Email</th>
<th> Message</th>

<th>Date </th>



</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['feedback_id'] . "</td>";

    echo "<td>" . $row['feedback_name'] . "</td>";
    echo "<td>" . $row['feedback_email'] . "</td>";
    echo "<td>" . $row['message'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";

}
echo "</table>";

mysqli_close($con);
?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>