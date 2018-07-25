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
   $id=$_REQUEST['id'];
   $name=$_REQUEST['fname'];
   $name1=$_REQUEST['lname'];
   $name2=$_REQUEST['gender'];
   $name3=$_REQUEST['dob'];
   $name4=$_REQUEST['address'];
   $name5=$_REQUEST['phone'];
   $name6=$_REQUEST['email'];
   $name7=$_REQUEST['cat'];
   $name8=$_REQUEST['yos'];
   $name9=$_REQUEST['salary'];

    // checking empty fields
    //if(empty($name)) {
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
		if(empty($name1)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
		if(empty($name2)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
		if(empty($name3)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
		if(empty($name4)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
		if(empty($name5)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
       if(empty($name6)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
      if(empty($name7)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($name8)) {
           echo "<font color='red'>Name field is empty.</font><br/>";
        }
         if(empty($name9)) {
         echo "<font color='red'>Name field is empty.</font><br/>";
        }


    else {
        //updating the table
        $result = mysqli_query($conn, "UPDATE `tbl_staff` SET `ff_name`='$name',`ll_name`='$name1',`gender`='$name2',`tdob`='$name3',`taddress`='$name4',`tphone`='$name5',`temail`='$name6',`category`='$name7',`yos`='$name8',`salary`='$name8' where t_id='$id'");

        //redirectig to the display page. In our case, it is index.php

     ?>
		<table width="78%" border="1" style="border-collapse:collapse;" align="right">
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
		<td align="center"><?php echo $row["temail"]; ?></td
            <td align="center"><?php echo $row["category"]; ?></td>
            <td align="center"><?php echo $row["yos"]; ?></td>
            <td align="center"><?php echo $row["salary"]; ?></td>

            <td align="center">
                <a href="editstaff.php?id=<?php echo $row["t_id"]; ?>">Edit</a>
            </td>
            <td align="center">
                <a href="marksdelete.php?id=<?php echo $row["t_id"]; ?>">Delete</a>
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
$result =mysqli_query($conn, "SELECT * FROM tbl_staff where t_id='$id'");

while($res = mysqli_fetch_array($result))
{

    $id=$res['t_id'];
    $name=$res['ff_name'];
    $name1=$res['ll_name'];
    $name2=$res['gender'];
    $name3=$res['tdob'];
    $name4=$res['taddress'];
    $name5=$res['tphone'];
    $name6=$res['temail'];
    $name7=$res['category'];
    $name8=$res['yos'];
    $name9=$res['salary'];
}
?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body style="padding: 150px">
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="updateaction5.php">
        <table width="70%" border="1" style="border-collapse:collapse;" align="right">
            <tr>
                <td>first name</td>
                <td><input type="text" name="fname" value="<?php echo $name;?>"></td>
            </tr>
			<tr>
                <td>last name</td>
                <td><input type="text" name="lname" value="<?php echo $name1;?>"></td>
            </tr>

			<tr>
                <td>gender</td>
                <td><input type="text" name="gender" value="<?php echo $name2;?>"></td>
            </tr>

			<tr>
                <td>dob</td>
                <td><input type="text" name="dob" value="<?php echo $name3;?>"></td>
            </tr>

			<tr>
                <td>address</td>
                <td><input type="text" name="address" value="<?php echo $name4;?>"></td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type="text" name="phone" value="<?php echo $name5;?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" value="<?php echo $name6;?>"></td>
            </tr>
            <tr>
                <td>category</td>
                <td><input type="text" name="cat" value="<?php echo $name7;?>"></td>
            </tr>
            <tr>
                <td>yos</td>
                <td><input type="text" name="yos" value="<?php echo $name8;?>"></td>
            </tr>
            <tr>
                <td>salary</td>
                <td><input type="text" name="salary" value="<?php echo $name9;?>"></td>
            </tr>
            <tr>
                <td>  <input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            UPDATE:
                <td> <input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <?php
    echo"<BR><BR><BR><BR><br><br><br>";
    include("footer.php");
    ?>
</body>
</html>