<html>
<body style="background-color:lightgray">



<br><br><br>

<form name="myForm" method="post" action="" onSubmit="validateForm();">

    <div class="table1"  align="center"  >
        <div class="tablerw">
            <br>
            <h1 align="center"> Select Student Id <h1>

        </div>


            <div class="tablerw">

                <div class="tablecol">Student id</div>

                <div><input type="text" name="id" id="id" size="30" style="background-color:white; color:black;"></div>

            </div>
        <br>

        <div class="tablerw">

            <input type="submit" name="register" value="REGISTER" align="center" style="background-color:grey;color:black;">&nbsp;&nbsp;
            <a href="" >  <input type="button" name="back" value="BACK" align="center" style="background-color:grey;color:black;"></a>

        </div>

    </div>
</form>





<?php
$con=mysqli_connect("localhost","root","","school");
// Check connection
include("header.php");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['register'])) {

    $id = $_REQUEST["id"];


    $result = mysqli_query($con, "SELECT s_id,first_name,last_name,class,sec,fee,fee_status FROM tbl_studetails WHERE s_id='$id' ");
    echo"<br>";
    echo "<table width=\"78%\" border=\"1\" style=\"border-collapse:collapse;\" align=\"right\">
<tr>
<th>student id</th>
<th> Name</th>
<th>Class</th>
<th>Section </th>
<th>Fee</th>
<th>Fee Status</th>

</tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['s_id'] . "</td>";
        echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
        echo "<td>" . $row['class'] . "</td>";
        echo "<td>" . $row['sec'] . "</td>";
        echo "<td>" . $row['fee'] . "</td>";
        if ($row['fee_status']==0) {
            echo "<td>"."Fee not paid"."</td>";
        } else {
            echo " <td>"."Fee paid "."</td>";
        }

    }
    echo "</table>";



    mysqli_close($con);
}
?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>

</body>

</html>
