<html>
<head>
    <title>Edit Data</title>
</head>

<body style="padding: 100px">

<br/><br/>
<div>
<form name="form1" method="post" action="">
    <table width="70%" border="1" style="border-collapse:collapse;" align="right">
        <tr>
            <td>fee paid</td>
            <td><input type="radio" name="fee" value="1"></td>
        </tr>
        <tr>
            <td>fee not paid</td>
            <td><input type="radio" name="fee" value="0"></td>
        </tr>
        <tr>
            <td>  <input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

            <td> <input type="submit" name="update" value="Update"></td>
        </tr>
    </table>



</form>
</div>


<?php
// including the database connection file

include("header.php");

$servername="localhost";
$username="root";
$password="";
$dbname="school";
$conn=new mysqli( $servername,$username, $password, $dbname);
if ($conn->connect_error){

    die("connection failed :" .$conn->connect_error);

}


if(isset($_POST['update']))
{
$id=$_POST['id'];
$name=$_POST['fee'];




//updating the table
$result = mysqli_query($conn, "UPDATE tbl_studetails SET fee_status='$name' where s_id='$id'");

?>
<br>
<br>
<br>
<br>
<br>
<div>
<table width="78%" border="1" style="border-collapse:collapse;" align="right">

    <thead style="background-color:yellow">
    <tr>


        <th><strong>student id</strong></th>
        <th><strong>First name</strong></th>
        <th><strong>Last name</strong></th>
        <th><strong>class</strong></th>
        <th><strong>Section</strong></th>
        <th><strong>Fee</strong></th>
        <th><strong>fee status</strong></th>


    </tr>
    </thead>
    <tbody style="background-color:powderblue">
    <?php
    $sel_query="Select * from tbl_studetails where s_id='$id'";
    $result = mysqli_query($conn,$sel_query);
    while($row = mysqli_fetch_array($result))
    {
    ?>
    <tr>
        <td align="center"><?php echo $row["s_id"]; ?></td>
        <td align="center"><?php echo $row["first_name"]; ?></td>
        <td align="center"><?php echo $row["last_name"]; ?></td>
        <td align="center"><?php echo $row["class"]; ?></td>
        <td align="center"><?php echo $row["sec"]; ?></td>
        <td align="center"><?php echo $row["fee"]; ?></td>
        <?php
        if ($row['fee_status']==0) {
        echo "<td>"."Fee not paid"."</td>";
        } else {
        echo " <td>"."Fee paid "."</td>";
        }
        ?>
    </tr>
    <?php
        }

        }
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

