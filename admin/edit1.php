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
    
    $name=$_POST['firstname'];
	$name1=$_POST['lastname'];
	$name2=$_POST['class'];
	$name3=$_POST['section'];
	$name4=$_POST['address'];
	$name5=$_POST['dob'];
	$name6=$_POST['state'];
	$name7=$_POST['fname'];
	$name8=$_POST['mname'];
    $name9=$_POST['fjob'];
	$name0=$_POST['mjob'];
	$name10=$_POST['mobno'];
 
 
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
            echo "<font color='red'>Name4 field is empty.</font><br/>";
        }
		 if(empty($name7)) {
            echo "<font color='red'>Name4 field is empty.</font><br/>";
        }
		 if(empty($name8)) {
            echo "<font color='red'>Name4 field is empty.</font><br/>";
        }
		 if(empty($name9)) {
            echo "<font color='red'>Name4 field is empty.</font><br/>";
        }
		 if(empty($name0)) {
            echo "<font color='red'>Name4 field is empty.</font><br/>";
        }
		 if(empty($name10)) {
            echo "<font color='red'>Name4 field is empty.</font><br/>";
        }
    else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_studetails SET first_name='$name',last_name='$name1', class='$name2',sec='$name3',address='$name4',dob='$name5',native='$name6',father_name='$name7',mother_name='$name8',father_job='$name9',mother_job='$name0',phone_no='$name10' where s_id='$id'");
        
        //redirectig to the display page. In our case, it is index.php
       ?>
		<table  width="78%" border="1" style="border-collapse:collapse;" align="right">
			<thead style="background-color:yellow">
			<tr>

				<th><strong>count</strong></th>
				<th><strong>id</strong></th>
				<th><strong>name</strong></th>
				<th><strong>class</strong></th>
				<th><strong>Section</strong></th>
				<th><strong>address</strong></th>
				<th><strong>dob</strong></th>
				<th><strong>State</strong></th>
				<th><strong>Father name</strong></th>
				<th><strong>Mother name</strong></th>
				<th><strong>Father job</strong></th>
				<th><strong>mother job</strong></th>
                <th><strong>Mobile</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
			</tr>
			</thead>
			<tbody style="background-color:powderblue">
		<?php
		$sel_query="Select * from tbl_marks where s_id='$id'";
		$result = mysqli_query($conn,$sel_query);
		while($row = mysqli_fetch_array($result)) 
		{ 
		?>
		<tr><td align="center"><?php echo $count; ?></td>
		<td align="center"><?php echo $row["s_id"]; ?></td>
		<td align="center"><?php echo $row["first_name"]; ?></td>
		<td align="center"><?php echo $row["last_name"]; ?></td>
		<td align="center"><?php echo $row["class"]; ?></td>
		<td align="center"><?php echo $row["sec"]; ?></td>
		<td align="center"><?php echo $row["address"]; ?></td>
		<td align="center"><?php echo $row["dob"]; ?></td>
		<td align="center"><?php echo $row["native"]; ?></td>
		<td align="center"><?php echo $row["father_name"]; ?></td>
		<td align="center"><?php echo $row["mother_name"]; ?></td>
		<td align="center"><?php echo $row["father_job"]; ?></td>
		<td align="center"><?php echo $row["mother_job"]; ?></td>
		<td align="center"><?php echo $row["phone_no"]; ?></td>
		<?php
		}
		
    }
}
    


?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result =mysqli_query($conn, "SELECT * FROM tbl_studetails where s_id='$id'");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['first_name'];
	$name1 = $res['last_name'];
   $name2 = $res['class'];
   $name3 = $res['sec'];
   $name4 = $res['address'];
    $name6 = $res['native'];
   $name5 = $res['dob'];
    $name7 = $res['father_name'];
   $name8 = $res['mother_name'];
    $name9 = $res['father_job'];
   $name0 = $res['mother_job'];
   $name10 = $res['phone_no'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body style="padding: 150px">
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="updateaction1.php">
        <table width="78%" border="1" style="border-collapse:collapse;" align="right">
            <tr> 
                <td>firstname</td>
                <td><input type="text" name="firstname" value="<?php echo $name;?>"></td>
            </tr>
			 <tr> 
                <td>lastname</td>
                <td><input type="text" name="lastname" value="<?php echo $name1;?>"></td>
            </tr>
             <tr> 
                <td>class</td>
                <td><input type="text" name="class" value="<?php echo $name2;?>"></td>
            </tr>
			 <tr> 
                <td>section</td>
                <td><input type="text" name="section" value="<?php echo $name3;?>"></td>
            </tr>
			 <tr> 
                <td>address</td>
                <td><input type="text" name="address" value="<?php echo $name4;?>"></td>
            </tr>
             <tr> 
                <td>native</td>
                <td><input type="text" name="state" value="<?php echo $name6;?>"></td>
            </tr>
             <tr> 
                <td>dob</td>
                <td><input type="text" name="dob" value="<?php echo $name5;?>"></td>
            </tr>
             <tr> 
                <td>father name</td>
                <td><input type="text" name="fname" value="<?php echo $name7;?>"></td>
            </tr>
			 <tr> 
                <td>mother_name</td>
                <td><input type="text" name="mname" value="<?php echo $name8;?>"></td>
            </tr>
             <tr> 
                <td>father_job</td>
                <td><input type="text" name="fjob" value="<?php echo $name9;?>"></td>
            </tr>
             <tr> 
                <td>mother_job</td>
                <td><input type="text" name="mjob" value="<?php echo $name0;?>"></td>
            </tr>
			<tr> 
                <td>phone no</td>
                <td><input type="text" name="mobno" value="<?php echo $name10;?>"></td>
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