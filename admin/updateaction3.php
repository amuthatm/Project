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
    
    $name=$_POST['subject'];
	$name1=$_POST['date'];
	$name2=$_POST['class'];
	
 
 
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
        $result = mysqli_query($conn, "UPDATE tbl_exam SET subject='$name',date='$name1', class='$name2' where e_no='$id'");
        
        //redirectig to the display page. In our case, it is index.php
       ?>
        <br><br><br>
		<table table width="78%" border="1" style="border-collapse:collapse;" align="right">
			<thead style="background-color:yellow">
			<tr>

				
				<th><strong>Exam no</strong></th>
				<th><strong>class</strong></th>
				<th><strong>subject</strong></th>
				<th><strong>date</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
				
			</tr>
			</thead>
			<tbody style="background-color:powderblue">
		<?php
		$sel_query="Select * from tbl_exam where e_no='$id'";
		$result = mysqli_query($conn,$sel_query);
		while($row = mysqli_fetch_array($result)) 
		{ 
		?>
		
		<td align="center"><?php echo $row["e_no"]; ?></td>
		<td align="center"><?php echo $row["class"]; ?></td>
		<td align="center"><?php echo $row["subject"]; ?></td>
		<td align="center"><?php echo $row["date"]; ?></td>
		<td align="center">
		
		<a href="examedit.php?id=<?php echo $row["e_no"]; ?>">Edit</a>
	</td>
<td align="center">
<a href="examdelete.php?id=<?php echo $row["e_no"];?>&class=<?php echo $row['class'];?>">Delete</a>
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
