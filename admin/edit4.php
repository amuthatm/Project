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



else {
//updating the table
$result = mysqli_query($conn, "UPDATE tbl_fee SET class='$id',fee='$name' where class='$id'");

//redirectig to the display page. In our case, it is index.php
?>
<table table width="78%" border="1" style="border-collapse:collapse;" align="right">
    <thead style="background-color:yellow">
    <tr>


        <th><strong> Class</strong></th>
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

        <td align="center"><?php echo $row["class"]; ?></td>
        <td align="center"><?php echo $row["fee"]; ?></td>

        <td align="center">
            <a href="edit3.php?id=<?php echo $row["class"]; ?>">Edit</a>
        </td>
        <td align="center">
            <a href="delete3.php?id=<?php echo $row["class"];?>">Delete</a>
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
    $result =mysqli_query($conn, "SELECT * FROM tbl_fee where class='$id'");

    while($res = mysqli_fetch_array($result))
    {
        $id = $res['class'];
        $name = $res['fee'];


    }
    ?>
    <html>
    <head>
        <title>Edit Data</title>
    </head>

    <body style="padding:150px">
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="updateaction8.php">
        <table width="78%" border="1" style="border-collapse:collapse;" align="right">
            <tr>
                <td>class</td>
                <td><input type="text" name="id" value="<?php echo $id;?>"></td>
            </tr>
            <tr>
                <td>fee</td>
                <td><input type="text" name="fee" value="<?php echo $name;?>"></td>
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