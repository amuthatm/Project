
<html>
<body style="background-color:powderblue">
<br><br><br>
<h2 align="center">VIEW CONTACT DETAILS</h2>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","school");
include ("header.php");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tbl_contact ");
echo"<br><br>";
echo "<table width=\"78%\" border=\"1\" style=\"border-collapse:collapse;\" align=\"right\">
<tr>
<th>Contact id</th>
<th>Contact Name</th>
<th> Email</th>
<th>Phone</th>
<th>Comment</th>
<th>Date </th>



</tr>";



while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['contact_id'] . "</td>";

    echo "<td>" . $row['c_name'] . "</td>";
    echo "<td>" . $row['c_email'] . "</td>";
    echo "<td>" . $row['c_phone'] . "</td>";
    echo "<td>" . $row['c_comment'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";

}

echo "</table>";

mysqli_close($con);
?>
<?php
echo"<BR><BR><BR><BR><br><br><br><br>";
include("footer.php");
?>
