<?php

// including the database connection file

$servername="localhost";
$username="root";
$password="";
$dbname="school";
$conn=new mysqli( $servername,$username, $password, $dbname);
if ($conn->connect_error){

    die("connection failed :" .$conn->connect_error);

}

include ("header.php");
if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $name=$_POST['fee'];



    // checking empty fields
    // if(empty($name))||(empty($name1))||(empty($name2))||(empty($name3))||(empty($name4)) {
    if(empty($id)) {
        echo "<font color='red'>Name field is empty.</font><br/>";
    }

    if(empty($name)) {
        echo "<font color='red'>Name1 field is empty.</font><br/>";

    }
    else
    {
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_fee SET class='$id',fee='$name' where class='$id'");

        //redirectig to the display page. In our case, it is index.php
        ?>
        <br><br><br>
        <table table width="78%" border="1" style="border-collapse:collapse;" align="right">
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
        $sel_query="Select * from tbl_fee where class='$id'";
        $result = mysqli_query($conn,$sel_query);
        while($row = mysqli_fetch_array($result))
        {
            ?>
            <tr>
            <td align="center"><?php echo $row["class"]; ?></td>
            <td align="center"><?php echo $row["fee"]; ?></td>


            <td align="center">
                <a href="edit4.php?id=<?php echo $row["class"]; ?>">Edit</a>
            </td>
            <td align="center">
                <a href="delete4.php?id=<?php echo $row["class"];?>">Delete</a>
            </td>
            <?php
        }

    }
}



              //  echo"<BR><BR><BR><BR><BR><BR><BR><BR>";
                include("footer.php");
                ?>

