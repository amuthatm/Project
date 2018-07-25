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
    $name=$_POST['fname'];
    $name1=$_POST['lname'];
    $name2=$_POST['gender'];
    $name3=$_POST['dob'];
    $name4=$_POST['address'];
    $name5=$_POST['phone'];
    $name6=$_POST['email'];
    $name7=$_POST['cat'];
    $name8=$_POST['yos'];
    $name9=$_POST['salary'];



    // checking empty fields
    // if(empty($name))||(empty($name1))||(empty($name2))||(empty($name3))||(empty($name4)) {
    if(empty($name)) {
        echo "<font color='red'>Name field is empty.</font><br/>";
    }

    if(empty($name1)) {
        echo "<font color='red'>Name1 field is empty.</font><br/>";
    }

    if(empty($name2)) {
        echo "<font color='red'>Name2 field is empty.</font><br/>";
    }

    if(empty($name3)) {
        echo "<font color='red'>Name3 field is empty.</font><br/>";
    }

    if(empty($name4)) {
        echo "<font color='red'>Name4 field is empty.</font><br/>";
    }
    if(empty($name5)) {
        echo "<font color='red'>Name4 field is empty.</font><br/>";
    }
    if(empty($name6)) {
        echo "<font color='red'>Name2 field is empty.</font><br/>";
    }

    if(empty($name7)) {
        echo "<font color='red'>Name3 field is empty.</font><br/>";
    }

    if(empty($name8)) {
        echo "<font color='red'>Name4 field is empty.</font><br/>";
    }
    if(empty($name9)) {
        echo "<font color='red'>Name4 field is empty.</font><br/>";
    }

    else {
        //updating the table
        $result = mysqli_query($conn, "UPDATE `tbl_staff` SET `ff_name`='$name',`ll_name`='$name1',`gender`='$name2',`tdob`='$name3',`taddress`='$name4',`tphone`='$name5',`temail`='$name6',`category`='$name7',`yos`='$name8',`salary`='$name9' where t_id='$id'");

        //redirectig to the display page. In our case, it is index.php
        ?>
        <br><br><br><br><br>
        <table  width="78%" border="1" style="border-collapse:collapse;" align="right">
        <thead style="background-color:yellow">
        <tr>

            <th><strong>id</strong></th>
            <th><strong>F_name</strong></th>
            <th><strong>L_name</strong></th>
            <th><strong>gender</strong></th>
            <th><strong>dob</strong></th>
            <th><strong>address</strong></th>
            <th><strong>phone</strong></th>
            <th><strong>email</strong></th>
            <th><strong>category</strong></th>
            <th><strong>yos</strong></th>
            <th><strong>salary</strong></th>
            <th><strong>Edit</strong></th>
            <th><strong>Delete</strong></th>


        </tr>
        </thead>
        <tbody style="background-color:powderblue">
        <?php
        $sel_query="Select * from tbl_staff where t_id='$id'";
        $result = mysqli_query($conn,$sel_query);
        while($row = mysqli_fetch_array($result))
        {
            ?>


            <td align="center"><?php echo $row["t_id"]; ?></td>
            <td align="center"><?php echo $row["ff_name"]; ?></td>
            <td align="center"><?php echo $row["ll_name"]; ?></td>
            <td align="center"><?php echo $row["gender"]; ?></td>
            <td align="center"><?php echo $row["tdob"]; ?></td>
            <td align="center"><?php echo $row["taddress"]; ?></td>
            <td align="center"><?php echo $row["tphone"]; ?></td>
            <td align="center"><?php echo $row["temail"]; ?></td>
            <td align="center"><?php echo $row["category"]; ?></td>
            <td align="center"><?php echo $row["yos"]; ?></td>
            <td align="center"><?php echo $row["salary"]; ?></td>

            <td align="center">
                <a href="editstaff.php?id=<?php echo $row["t_id"]; ?>">Edit</a>
            </td>
            <td align="center">
                <a href="deletestaff.php?id=<?php echo $row["t_id"]; ?>">Delete</a>
            </td>
        <?php
        }

    }



}

?>
        <?php
        echo"<BR><BR><BR><BR><br><br><br>";
        include("footer.php");
        ?>
