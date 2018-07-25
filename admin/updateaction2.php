<!DOCTYPE html>
<html>
<body style="padding: 150px;" >


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
    
    $name=$_REQUEST['fname'];
   $name1=$_REQUEST['lname'];
   $name2=$_REQUEST['class'];
   $name3=$_REQUEST['section'];
   $name4=$_REQUEST['attendance'];
   $name5=$_REQUEST['date'];
 
 
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
	
    else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_attendance SET f_Name='$name', l_Name='$name1', class='$name2', sec='$name3', attendance='$name4', date='$name5' where s_id='$id'");
        
        //redirectig to the display page. In our case, it is index.php
       ?>
        <br><br>
		<table table width="78%" border="1" style="border-collapse:collapse;" align="right">
			<thead style="background-color:yellow">
			<tr>
              		
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
		
		
		<td align="center"><?php echo $row["s_id"]; ?></td>
		<td align="center"><?php echo $row["f_Name"]; ?></td>
		<td align="center"><?php echo $row["l_Name"]; ?></td>
		<td align="center"><?php echo $row["class"]; ?></td>
		<td align="center"><?php echo $row["sec"]; ?></td>
        <td align="center"><?php echo $row["attendance"]; ?></td>
		<td align="center"><?php echo $row["date"]; ?></td>
		
		<td align="center">
		<a href="edit.php?id=<?php echo $row["s_id"]; ?>">Edit</a>
	</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["s_id"];?>&class=<?php echo $row['class'];?>">Delete</a>
</td>
		<?php
		}
		
    }

    
    
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
