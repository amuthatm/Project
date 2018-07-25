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

    $name=$_POST['name'];
    $name1=$_POST['class'];
	$name2=$_POST['section'];



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
        $result = mysqli_query($conn, "UPDATE tbl_classteacher SET class_teacher='$name',class='$name1', sec='$name2' where t_id='$id'");

        //redirectig to the display page. In our case, it is index.php
        ?>
        <table table width="78%" border="1" style="border-collapse:collapse;" align="right">
            <thead style="background-color:yellow">
            <tr>


                <th><strong> Teacher id</strong></th>
                <th><strong>Teacher  name</strong></th>
                <th><strong>Class</strong></th>
                <th><strong>Section</strong></th>
                <th><strong>Edit</strong></th>
                <th><strong>Delete</strong></th>
            </tr>
            </thead>
            <tbody style="background-color:powderblue">
            <?php
            $sel_query="Select * from tbl_classteacher where t_id='$id'";
            $result = mysqli_query($conn,$sel_query);
            while($row = mysqli_fetch_array($result))
            {
            ?>

            <td align="center"><?php echo $row["t_id"]; ?></td>
            <td align="center"><?php echo $row["class_teacher"]; ?></td>
            <td align="center"><?php echo $row["class"]; ?></td>
            <td align="center"><?php echo $row["sec"]; ?></td>
            <td align="center">
                <a href="edit2.php?id=<?php echo $row["s_id"]; ?>">Edit</a>
            </td>
            <td align="center">
                <a href="delete2.php?id=<?php echo $row["s_id"];?>&class=<?php echo $row['class'];?>">Delete</a>
            </td>

            <?php
		}

    }
}



?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result =mysqli_query($conn, "SELECT * FROM tbl_classteacher where t_id='$id'");

while($res = mysqli_fetch_array($result))
{
    $name = $res['class_teacher'];
    $name1 = $res['class'];
    $name2 = $res['sec'];

}
?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body style="padding: 150px">
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="updateaction6.php">
        <table width="78%" border="1" style="border-collapse:collapse;" align="right">
            <tr>
                <td>teacher name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
			 <tr>
                <td>class</td>
                <td><input type="text" name="class" value="<?php echo $name1;?>"></td>
            </tr>

			 <tr>
                <td>section</td>
                <td><input type="text" name="section" value="<?php echo $name2;?>"></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <?php
    echo"<BR><BR><BR><BR><br><br><br>";
    include("footer.php");
    ?>
</body>
</html>