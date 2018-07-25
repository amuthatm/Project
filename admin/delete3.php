
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Records</title>

</head>
<body>
<div class="form" align="center">

    <a href="addsubjectteacher.php">INSERT</a>
    <br><br><br>
    <h2 align="center">VIEW SUBJECT TEACHER DETAILS</h2>
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
    $cls=$_GET['class'];


    $sql="SELECT * FROM tbl_sub WHERE sub_id='$id' and class='$cls'";
    $rslt=mysqli_query($conn,$sql);
    if($rslt)
    {
        $result ="DELETE FROM tbl_sub WHERE sub_id='$id'and class='$cls'";
        $res=mysqli_query($conn,$result);
    }


//header("Location:exam.php");


        $qry="SELECT * FROM `tbl_sub`WHERE class='$cls'";
        $rs=mysqli_query($conn,$qry);
//$row=mysqli_fetch_array($rs);
        ?>
        <table width="78%" border="1" style="border-collapse:collapse;" align="right">
            <thead style="background-color: yellow">
            <th>
                Teacher Id
            </th>
            <th>
                 Teacher name
            </th>


            <th>
                class
            </th>
            <th>
                Section
            </th>
            <th>
                Subject
            </th>

            </thead>

            <?php
            while($row=mysqli_fetch_array($rs))
            {
                echo"<tbody style='background-color: #00aced'>
    <tr>
    <td>".$row['t_id']."</td>
    <td>".$row['teacher']."</td>
    <td>".$row['class']."</td>
    <td>".$row['sec']."</td>
     <td>".$row['sub']."</td>
    
 
   
    </tr>
         </tbody>";
            }
            ?>
        </>
        <?php
    }
    else
    {
        echo "error";
    }


?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
