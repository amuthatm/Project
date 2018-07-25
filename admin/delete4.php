
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Records</title>


</head>
<body>
<div class="form" align="center">


    <br><br><br>
    <a href="insertfee.php">INSERT</a>
    <h2 align="center">VIEW FEE DETAILS</h2>
</div>

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

if( isset($_GET['id']))
{
//getting id of the data from url
    $id = $_GET['id'];



  //  $sql="SELECT * FROM tbl_fee WHERE class='$id'";
 //  $rslt=mysqli_query($conn,$sql);


//deleting the row from table
    $result ="DELETE FROM tbl_fee WHERE class='$id'";
    $res=mysqli_query($conn,$result);
//header("Location:exam.php");
   //echo"hello";



//$row=mysqli_fetch_array($rs);
    ?>
    <table width="70%" border="1" style="border-collapse:collapse;" align="center">
        <thead style="background-color: yellow">
        <tr>
        <th>
            Class
        </th>
        <th>
            Fee
        </th>
        </tr>

        </thead>
    <tbody style='background-color: #00aced'>
        <?php
    $qry="SELECT * FROM `tbl_fee`";
    $rs=mysqli_query($conn,$qry);
        while($row=mysqli_fetch_array($rs))
        {
            ?>
<tr>
    <td><?php echo $row['class']?></td>
    <td ><?php echo$row['fee']?></td>
</tr>


        <?php
            }



}
else
{
    echo "error";
}


?>

    </tbody>

    </table>
<br><br>
<div align="center"><a href="feeupdate.php" style="text-decoration: none ;font-size:20px; "> Back</a></div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>