


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Records</title>

</head>
<body>
<div class="form" align="center">
    <br><br><br>
    <a href="adds.php">INSERT</a>

    <h2 align="center">VIEW STAFF DETAILS</h2>
</div>
</body>
</html>
<?php
//including the database connection file

$servername="localhost";
$username="root";
$password="";
$dbname="school";

//include("header.php");

$conn=new mysqli( $servername,$username, $password, $dbname);
if ($conn->connect_error){

    die("connection failed :" .$conn->connect_error);

}



//getting id of the data from url
    $id = $_GET['id'];




//deleting the row from table
        $result ="DELETE FROM tbl_staff WHERE t_id='$id'";
        $res=mysqli_query($conn,$result);
//header("Location:exam.php");
        $result1="DELETE FROM tbl_classteacher WHERE t_id='$id';";
        $res1=mysqli_query($conn,$result1);

        $result2="DELETE FROM tbl_sub WHERE t_id='$id';";
        $res2=mysqli_query($conn,$result2);


        $result3="UPDATE tbl_user SET status='0' where id='$id'";
        echo $result3;
        $res3 = mysqli_query($conn,$result3);


        $qry="SELECT * FROM `tbl_staff`";
        $rs=mysqli_query($conn,$qry);

        ?>
        <table  width="78%" border="1" style="border-collapse:collapse;" align="right">
            <thead style="background-color: yellow">
            <th>
                Teacher id
            </th>
            <th>
                First name
            </th>
            <th> Last name
            <th>
                Gender
            </th>
            <th>
                Dob
            </th>
            <th>
                Address
            </th>
            <th>
                Phone
            </th>
            <th>
                Email
            </th>
            <th>
                Category
            </th>
            <th>
                Yos
            </th>
            <th>
                Salary
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
    
    </tr>
         </tbody>";
            }
            ?>
        </table>

<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>



