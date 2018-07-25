<!DOCTYPE html>
<html>
<head>
    <style>
        body
        {
            align: right;
        }
    </style>

</head>
<body style="padding:150px;" >
<?php

 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
$conn=new mysqli( $servername,$username, $password, $dbname);
if ($conn->connect_error){

    die("connection failed :" .$conn->connect_error);

}
 
include ("header.php");
if(isset($_POST['register'])) {
$id = $_POST['id'];
$class = $_POST["class"];
$sec = $_POST["section"];
$sub1 = $_POST["sub1"];
$sub2 = $_POST["sub2"];
$sub3 = $_POST["sub3"];
$sub4 = $_POST["sub4"];
$sub5 = $_POST["sub5"];


$sql = "select s_id from tbl_studetails where s_id='$id'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$id = $row['s_id'];


$sql3 = "INSERT INTO `tbl_marks`(`m_no`, `s_id`, `class`, `sec`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`) VALUES (' ','$id','$class','$sec','$sub1','$sub2','$sub3','$sub4','$sub5')";
if ($conn->query($sql3) == "TRUE")
{
?>

<table width="78%" border="1" style="border-collapse:collapse;" align="right">
    <thead style="background-color:yellow">
    <tr>
        <th><strong>id</strong></th>
        <th><strong>class</strong></th>
        <th><strong>Section</strong></th>
        <th><strong>subject1</strong></th>
        <th><strong>subject2</strong></th>
        <th><strong>subject3</strong></th>
        <th><strong>subject4</strong></th>
        <th><strong>subject5</strong></th>

    </tr>
    </thead>
    <tbody style="background-color:powderblue">
    <?php
    $sel_query = "Select * from tbl_marks where s_id='$id'";
    $result = mysqli_query($conn, $sel_query);
    while ($row = mysqli_fetch_array($result))
    {
         ?>

        <td align="center"><?php echo $row["s_id"]; ?></td>
        <td align="center"><?php echo $row["class"]; ?></td>
        <td align="center"><?php echo $row["sec"]; ?></td>
        <td align="center"><?php echo $row["sub1"]; ?></td>
        <td align="center"><?php echo $row["sub2"]; ?></td>
        <td align="center"><?php echo $row["sub3"]; ?></td>
        <td align="center"><?php echo $row["sub4"]; ?></td>
        <td align="center"><?php echo $row["sub5"]; ?></td>

        <?php
      }

    }

else{
    echo"<div align='center'>";
    echo"Student doesn't exsist";
    echo"</div>";
}



    mysqli_close($conn);


}

    ?>

    </tbody>
</table>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>