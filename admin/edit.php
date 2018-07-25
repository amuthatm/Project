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
   $name2=$_REQUEST['class'];
   $name3=$_REQUEST['section'];
   $name4=$_REQUEST['attendance'];
   $name5=$_REQUEST['date'];
 
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
        
        
    else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_attendance SET f_Name='$name', l_Name='$name1', class='$name2', sec='$name3', attendance='$name4', date='$name5' where s_id='$id'");
        
        //redirectig to the display page. In our case, it is index.php
        
     ?>
		<table width="78%" border="1" style="border-collapse:collapse;" align="right">
			<thead style="background-color:yellow">
			<tr>

				<th><strong>count</strong></th>
				<th><strong>id</strong></th>
			   <th><strong>First name</strong></th>
				<th><strong>Last name</strong></th>
				<th><strong>class</strong></th>
				<th><strong>Section</strong></th>
                <th><strong>attendance</strong></th>
				<th><strong>date</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
			</tr>
			</thead>
			<tbody style="background-color:powderblue">
		<?php
		$sel_query="Select * from tbl_attendance where s_id='$id'";
		$result = mysqli_query($conn,$sel_query);
		while($row = mysqli_fetch_array($result)) 
		{ 
		?>
		<tr><td align="center"><?php echo $count; ?></td>
		<td align="center"><?php echo $row["s_id"]; ?></td>
		<td align="center"><?php echo $row["f_Name"]; ?></td>
		<td align="center"><?php echo $row["l_Name"]; ?></td>
		<td align="center"><?php echo $row["class"]; ?></td>
		<td align="center"><?php echo $row["sec"]; ?></td>
        <td align="center"><?php echo $row["attendance"]; ?></td>
		<td align="center"><?php echo $row["date"]; ?></td>
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
$result =mysqli_query($conn, "SELECT * FROM tbl_attendance where s_id='$id'");
 
while($res = mysqli_fetch_array($result))
{
    
   $name=$res['f_Name'];
   $name1=$res['l_Name'];
   $name2=$res['class'];
   $name3=$res['sec'];
   $name4=$res['attendance'];
   $name5=$res['date'];
 
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body style="padding: 150px">
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="updateaction2.php">
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
                <td>class</td>
                <td><input type="text" name="class" value="<?php echo $name2;?>"></td>
            </tr>
            
			<tr> 
                <td>section</td>
                <td><input type="text" name="section" value="<?php echo $name3;?>"></td>
            </tr>
            
			<tr> 
                <td>attendance</td>
                <td><input type="text" name="attendance" value="<?php echo $name4;?>"></td>
            </tr>
            <tr> 
                <td>date</td>
                <td><input type="text" name="date" value="<?php echo $name5;?>"></td>
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