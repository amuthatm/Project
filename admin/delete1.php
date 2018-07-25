


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Records</title>
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

<div class="form" align="center">

    <a href="addStudent.php">INSERT</a>
    <br><br><br>
    <h2 align="center">VIEW STUDENT DETAILS</h2>
</div>

<?php
//including the database connection file

$servername="localhost";
$username="root";
$password="";
$dbname="school";



$conn=new mysqli( $servername,$username, $password, $dbname);
if ($conn->connect_error){

    die("connection failed :" .$conn->connect_error);

}

if(isset($_GET['id'])&& isset($_GET['class']))
{
//getting id of the data from url
    $id = $_GET['id'];



    $sql="SELECT * FROM tbl_studetails WHERE s_id='$id'";
    $rslt=mysqli_query($conn,$sql);
    if($rslt->num_rows==1)
    {
//deleting the row from table
        $result ="DELETE FROM tbl_studetails WHERE s_id='$id'";
        $res=mysqli_query($conn,$result);
//header("Location:exam.php");
        $cls=$_GET['class'];

        $result3="UPDATE tbl_user SET status='0' where id='$id'";

        $res3 = mysqli_query($conn,$result3);

        $qry="SELECT * FROM `tbl_studetails`WHERE class='$cls'";
        $rs=mysqli_query($conn,$qry);
//$row=mysqli_fetch_array($rs);
        ?>
        <table width="78%" border="1" style="border-collapse:collapse" align="center">
            <thead style="background-color: yellow">
            <th>Student Id</th>
            <th>
                 f_name
            </th>
            <th> L_name
            </th>
            <th>
                Dob
            </th>
            <th>
                Gender
            </th>
            <th>
                Address
            </th>
            <th>
                phone
            </th>
            <th>
                email
            </th>
            <th>
                F_name
            </th>
            <th>
                M_name
            </th>
            <th>
                class
            </th>
            <th>
                Section
            </th>
            <th>
                F_job
            </th>
            <th>
                M_job
            </th>
            <th>
                native
            </th>
            <th>
                Fee
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
                        <td>".$row['8']."</td>
                        <td>".$row['9']."</td>
                        <td>".$row['10']."</td>
                        <td>".$row['11']."</td>
                        <td>".$row['12']."</td>
                        <td>".$row['13']."</td>
                        <td>".$row['14']."</td>
                        <td>".$row['15']."</td>
                        <td>".$row['16']."</td>
   
                </tr>
         </tbody>";
            }
            ?>

        <?php
    }
    else
    {
        echo "error";
    }

}
?>
</table>

<div class="nav" align="center">
    <a style='text-align: center' href='studentedit1.php'>BACK</a>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>