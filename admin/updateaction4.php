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

    $name=$_POST['pname'];
    $name1=$_POST['email'];
    $name2=$_POST['phone'];


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

    else {
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_pdetails SET parent_name='$name',pemail='$name1', phone='$name2' where s_id='$id'");

        //redirectig to the display page. In our case, it is index.php
        ?>
        <br><br><br>
        <table width="78%" border="1" style="border-collapse:collapse;" align="right">
        <thead style="background-color:yellow">
        <tr>


            <th><strong>Parent id</strong></th>
            <th><strong>Parent name</strong></th>
            <th><strong>Student id</strong></th>
            <th><strong>Phone</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>Edit</strong></th>
            <th><strong>Delete</strong></th>

        </tr>
        </thead>
        <tbody style="background-color:powderblue">
        <?php
        $sel_query="Select * from tbl_pdetails where s_id='$id'";
        $result = mysqli_query($conn,$sel_query);
        while($row = mysqli_fetch_array($result))
        {
            ?>

            <td align="center"><?php echo $row["p_id"]; ?></td>
            <td align="center"><?php echo $row["parent_name"]; ?></td>
            <td align="center"><?php echo $row["s_id"]; ?></td>
            <td align="center"><?php echo $row["phone"]; ?></td>
            <td align="center"><?php echo $row["pemail"]; ?></td>
            <td align="center">

                <a href="parentedit.php?id=<?php echo $row["s_id"]; ?>">Edit</a>
            </td>
            <td align="center">
                <a href="parentdelete.php?id=<?php echo $row["s_id"]; ?>">Delete</a>
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
