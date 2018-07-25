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
    
    $name=$_POST['sub1'];
	$name1=$_POST['sub2'];
	$name2=$_POST['sub3'];
	$name3=$_POST['sub4'];
	$name4=$_POST['sub5'];
	
 
 
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
		 
    else 
	{    
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_marks SET sub1='$name',sub2='$name1', sub3='$name2',sub4='$name3',sub5='$name4' where s_id='$id'");
        
        //redirectig to the display page. In our case, it is index.php
	?>
		<table  width="78%" border="1" style="border-collapse:collapse;" align="right">
			<thead style="background-color:yellow">
			<tr>


				<th><strong>id</strong></th>
				<th><strong>Class</strong></th>
				<th><strong>Section</strong></th>
				<th><strong>Subject1</strong></th>
				<th><strong>Subject2</strong></th>
				<th><strong>Subject3</strong></th>
				<th><strong>Subject4</strong></th>
				<th><strong>Subject5</strong></th>

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

		<td align="center"><?php echo $row["s_id"]; ?></td>
		<td align="center"><?php echo $row["class"]; ?></td>
		<td align="center"><?php echo $row["sec"]; ?></td>
		<td align="center"><?php echo $row["sub1"]; ?></td>
		<td align="center"><?php echo $row["sub2"]; ?></td>
		<td align="center"><?php echo $row["sub3"]; ?></td>
		<td align="center"><?php echo $row["sub4"]; ?></td>
		<td align="center"><?php echo $row["sub5"]; ?></td>
		<?php
		}
		
    }
}

?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result =mysqli_query($conn, "SELECT * FROM tbl_marks where s_id='$id'");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['sub1'];
	$name1 = $res['sub2'];
   $name2 = $res['sub3'];
   $name3 = $res['sub4'];
   $name4 = $res['sub5'];
 
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body style="padding: 150px">
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="updateaction.php">
        <table width="70%" border="1" style="border-collapse:collapse;" align="right">
            <tr> 
                <td>subject1</td>
                <td><input type="text" name="sub1" value="<?php echo $name;?>"></td>
            </tr>
			 <tr> 
                <td>subject2</td>
                <td><input type="text" name="sub2" value="<?php echo $name1;?>"></td>
            </tr>
             <tr> 
                <td>subject3</td>
                <td><input type="text" name="sub3" value="<?php echo $name2;?>"></td>
            </tr>
			 <tr> 
                <td>subject4</td>
                <td><input type="text" name="sub4" value="<?php echo $name3;?>"></td>
            </tr>
			 <tr> 
                <td>subject5</td>
                <td><input type="text" name="sub5" value="<?php echo $name4;?>"></td>
            </tr>
         
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