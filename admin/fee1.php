<html>
<body style="padding: 150px">

</body>
</html>


<?php

include ("connect.php");
include("header.php");
if(isset($_POST['register']))
{
    $class=$_POST['class'];
    $fee=$_POST['fee'];

    $sql="INSERT INTO `tbl_fee` (`class`, `fee`) VALUES ('$class', '$fee')";
    if ($conn->query($sql) == "TRUE") {

        ?>
        <table  width="78%" border="1" style="border-collapse:collapse; padding: 150px" align="right">
            <thead style="background-color:yellow">
            <tr>



                <th><strong>Class</strong></th>
                <th><strong>Fee</strong></th>

            </tr>
            </thead>
            <tbody style="background-color:powderblue">

            <?php

            $sel_query="Select * from tbl_fee where class='$class' ";
            $result = mysqli_query($conn,$sel_query);
            while($row = mysqli_fetch_array($result)) { ?>

                <tr>
                    <td align="center"><?php echo $row["class"]; ?></td>
                    <td align="center"><?php echo $row["fee"]; ?></td>


                </tr>
            <?php  } ?>
            </tbody>
        </table>
        <?php
    }
}
?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
