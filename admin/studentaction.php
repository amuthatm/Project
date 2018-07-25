<!DOCTYPE HTML>
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
<body style="padding: 150px">

<?php
include ("connect.php");
//include ("header.php");
if(isset($_POST['register']))
{

  $frname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $gender = $_POST["gender"];
  $dob = $_POST["dob"];
  $address = $_POST["address"];
  $state = $_POST["state"];
  $class = $_POST["class"];
 $section = $_POST["section"];
$father = $_POST["fname"];
$mother = $_POST["mname"];
$fjob = $_POST["fjob"];
$mjob = $_POST["mjob"];
$mobno = $_POST["mobileno"];
$uname = $_POST["uname"];
$pass = $_POST["passw"];
$email = $_POST['email'];
$qry= "INSERT INTO `tbl_user` (`id`, `username`, `password`, `type`, `status`) VALUES (NULL, '$uname', '$pass', 'student', '1')";
$r = mysqli_query($conn, $qry);

if($r)
    {
        $sql = "select id from tbl_user where username='$uname'";
        $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($res);///check///

    $id = $row['id'];
    $sql3 = "select fee from tbl_fee where class='$class'";
    $res1 = mysqli_query($conn, $sql3);
    $row1 = mysqli_fetch_assoc($res1);
    $class1 = $row1['fee'];
    $sql1 = "INSERT INTO `tbl_studetails` (`student_no`, `s_id`, `first_name`, `last_name`, `dob`, `gender`, `address`, `phone_no`,`email`, `father_name`, `mother_name`, `class`, `sec`, `father_job`, `mother_job`, `native`,`fee`,`fee_status`) VALUES ('','$id', '$frname', '$lname', '$dob', '$gender', '$address', '$mobno', '$email','$father', '$mother', '$class', '$section', '$fjob', '$mjob', '$state','$class1',0)";
    if ($conn->query($sql1) == "TRUE")
    {
        $result = mysqli_query($conn,"SELECT * FROM tbl_studetails where class='$class'and sec='$section'");

        echo "<table width=\"78%\" border=\"1px solid\" style=\"border-collapse:collapse;\" align=\"center\">
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
?>
<div class="nav" align="center">
    <a style='text-align: center' href='addStudent.php'>BACK</a>
</div>
<?php
         }

    }


}

mysqli_close($conn);
 ?>

        </tbody>
        </table>
        </div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>