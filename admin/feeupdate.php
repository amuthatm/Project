<html>
<body style="background-color:floralwhite;  padding:150px">

<form name="myForm" method="post" action="" onSubmit="validateForm();">
    <div class="table1"  align="center"  >
        <div class="tablerw">
            <h1 align="center"> Select Class <h1>

        </div>

        <div class="tablerw">

            <div class="tablecol">Class</div>

            <div><select name="id" style="background-color:white; color:black;" >

                    <option value="-1" >select..</option>

                    <option value="I">I</option>

                    <option value="II">II</option>

                    <option value="III">III</option>

                    <option value="IV">IV</option>
                    <option value="V">V</option><option value="VI">VI</option><option value="VII">VII</option><option value="VIII">VIII</option><option value="IX">IX</option><option value="X">X</option>

                </select></div>

        </div>

        <br>
        <div class="tablerw">
            <br><br><br>

            <input type="submit" name="register" value="REGISTER" align="center" style="background-color:grey;color:black;">&nbsp;&nbsp;
            <a href="formcheck.php">  <input type="button" value="CLEAR" align="center" style="background-color:grey ;color:black;" > </a>

        </div>

    </div>
</form>
</body>
</html>



<?php
$servername="localhost";
$username="root";
$password="";
$dbname="school";
$conn=new mysqli( $servername,$username, $password, $dbname);
if ($conn->connect_error){

    die("connection failed :" .$conn->connect_error);
}
?>
<!DOCTYPE html>
<html>


<meta charset="utf-8">
<title>View Records</title>
<head>
    <?php    include("header.php");?>

</head>

<body>


<?php
if(isset($_REQUEST['register']))
{
$class=$_REQUEST['id'];
?>
<div class="form" align="center">
    <br><br><br>
    <a href="insertfee.php" style="color:green; font-size: 25px">INSERT</a>
    <h2 align="center">VIEW FEE DETAILS</h2>


<table  width="78%" border="1" style="border-collapse:collapse;" align="right">
    <thead style="background-color:yellow">
    <tr>



        <th><strong>Class</strong></th>
        <th><strong>Fee</strong></th>
        <th><strong>Edit</strong></th>

        <th><strong>Delete</strong></th>
    </tr>
    </thead>
    <tbody style="background-color:powderblue">

<?php

        $sel_query="Select * from tbl_fee where class='$class'";
        $result = mysqli_query($conn,$sel_query);
        while($row = mysqli_fetch_array($result)) { ?>


            <td align="center"><?php echo $row["class"]; ?></td>
            <td align="center"><?php echo $row["fee"]; ?></td>

            <td align="center">
                <a href="edit4.php?id=<?php echo $row["class"]; ?>">Edit</a>
            </td>
            <td align="center">
                <a href="delete4.php?id=<?php echo $row["class"];?>">Delete</a>
            </td>
            </tr>
            <?php  }} ?>
        </tbody>
    </table>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>