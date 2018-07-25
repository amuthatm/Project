<html>
<head>
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
<body style="background-color:powderblue">
<h2 align="center">VIEW STUDENT DETAILS</h2>


<br><br><br>


<?php
$con=mysqli_connect("localhost","root","","school");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$class=$_REQUEST["class"];
$sec=$_REQUEST["section"];

$result = mysqli_query($con,"SELECT * FROM tbl_studetails where class='$class'and sec='$sec'");

echo "<table width=\"70%\" border=\"1px solid\" style=\"border-collapse:collapse;\" align=\"center\">
<tr>
<th> id</th>
<th>  Name</th>

<th> Dob</th>
<th> Gender</th>
<th> Address</th>
<th> Phone </th>
<th> Email</th>
<th> F_name</th>
<th> M_name </th>
<th>class </th>
<th>section</th>
<th>F_job</th>
<th>M_job</th>
<th> native</th>
<th> fee</th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['s_id'] . "</td>";
echo "<td>" . $row['first_name'] ." ". $row['last_name']. "</td>";
echo "<td>" . $row['dob'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['phone_no'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['father_name'] . "</td>";
echo "<td>" . $row['mother_name'] . "</td>";
echo "<td>" . $row['class'] . "</td>";
echo "<td>" . $row['sec'] . "</td>";
echo "<td>" . $row['father_job'] . "</td>";
echo "<td>" . $row['mother_job'] . "</td>";
echo "<td>" . $row['native'] . "</td>";
echo "<td>" . $row['fee'] . "</td>";

}
echo "</table>";

mysqli_close($con);
?>

<div class="nav" align="center">
    <a style='text-align: center' href='class1.php'>BACK</a>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>