<html>
<body style="padding: 150px">



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

include("header.php");
if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $name=$_POST['name'];
    $name1=$_POST['class'];
    $name2=$_POST['section'];
    $name3=$_POST['subject'];

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
        echo "<font color='red'>Name2 field is empty.</font><br/>";
    }

    else {
        //updating the table
        $qry="select sub_id from tbl_subject where sub_name='$name3'";
        $res1=mysqli_query($conn,$qry);
        $rows=mysqli_fetch_assoc($res1);
        $sid=$rows['sub_id'];

        $result = mysqli_query($conn, "UPDATE tbl_sub SET teacher='$name',class='$name1', sec='$name2' ,sub='$name3',sub_id='$sid' where t_id='$id'");

        //redirectig to the display page. In our case, it is index.php
        ?>
        <table width="78%" border="1" style="border-collapse:collapse" align="right">
        <thead style="background-color:yellow">
        <tr>


            <th><strong> Teacher id</strong></th>
            <th><strong>Teacher  name</strong></th>
            <th><strong>Class</strong></th>
            <th><strong>Section</strong></th>
            <th><strong>Subject</strong></th>
            <th><strong>Edit</strong></th>
            <th><strong>Delete</strong></th>
        </tr>
        </thead>
        <tbody style="background-color:powderblue">
        <?php
        $sel_query="Select * from tbl_sub where t_id='$id'";
        $result = mysqli_query($conn,$sel_query);
        while($row = mysqli_fetch_array($result))
        {
            ?>

            <td align="center"><?php echo $row["t_id"]; ?></td>
            <td align="center"><?php echo $row["teacher"]; ?></td>
            <td align="center"><?php echo $row["class"]; ?></td>
            <td align="center"><?php echo $row["sec"]; ?></td>
            <td align="center"><?php echo $row["sub"]; ?></td>


            <td align="center">
                <a href="edit3.php?id=<?php echo $row["t_id"]; ?>">Edit</a>
            </td>
            <td align="center">
                <a href="delete3.php?id=<?php echo $row["sub_id"];?>&class=<?php echo $row['class'];?>">Delete</a>
            </td>
            <?php
        }

    }



}

?>
        <?php
        echo"<BR><BR><BR><BR><BR><BR><BR><BR>";
        include("footer.php");
        ?>
</body>
</html>

