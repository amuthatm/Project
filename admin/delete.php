


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Records</title>

</head>
<body>
<div class="form" align="center">
    <br><br><br>
    <a href="add.php">INSERT</a>
    <br><br><br>
    <h2 align="center">VIEW ATTENDANCE DETAILS</h2>
</div>
</body>
</html>
<?php
//including the database connection file

$servername="localhost";
$username="root";
$password="";
$dbname="school";

include("header.php");

$conn=new mysqli( $servername,$username, $password, $dbname);
if ($conn->connect_error){

    die("connection failed :" .$conn->connect_error);

}

if(isset($_GET['id'])&& isset($_GET['class']))
{
//getting id of the data from url
    $id = $_GET['id'];



    $sql="SELECT * FROM tbl_attendance WHERE s_id='$id'";
    $rslt=mysqli_query($conn,$sql);
    if($rslt->num_rows==1)
    {
//deleting the row from table
        $result ="DELETE FROM tbl_attendance WHERE s_id='$id'";
        $res=mysqli_query($conn,$result);
//header("Location:exam.php");
        $cls=$_GET['class'];




        $qry="SELECT * FROM `tbl_attendance`WHERE class='$cls'";
        $rs=mysqli_query($conn,$qry);
//$row=mysqli_fetch_array($rs);
        ?>
        <table table width="78%" border="1" style="border-collapse:collapse;" align="right">
            <thead style="background-color: yellow">
            <th>
                Student Id
            </th>
            <th>
                First name
            </th>
            <th> Last name
            </th>
            <th>
                Class
            </th>
            <th>
                Section
            </th>
            <th>
                Attendance
            </th>
            <th>
                Date
            </th>
            </thead>

            <?php
            while($row=mysqli_fetch_array($rs))
            {
                echo"<tbody style='background-color: #00aced'>
    <tr>
    <td>".$row['1']."</td>
    <td>".$row['2']."</td>
    <td>".$row['3']."</td>
    <td>".$row['4']."</td>
    <td>".$row['5']."</td>
    <td>".$row['6']."</td>
    <td>".$row['7']."</td>
    </tr>
         </tbody>";
            }
            ?>
        </table>
        <?php
    }
    else
    {
        echo "error";
    }
    ;
}
?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
