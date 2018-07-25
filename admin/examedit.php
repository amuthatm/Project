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
{   $id=$_POST['id'];
    $name2=$_POST['class'];
    $name1=$_POST['date'];
    $name=$_POST['subject'];
 
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
        
        
     else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_exam SET date='$name1',subject='$name' ,class=$name2' where e_no='$id'");
        
        //redirectig to the display page. In our case, it is index.php
       ?>
		<table width="78%" border="1" style="border-collapse:collapse;" align="right">
			<thead style="background-color:yellow">
			<tr>

				<th><strong>count</strong></th>
				<th><strong>Exam no</strong></th>
				<th><strong>Class</strong></th>
				<th><strong>Subject</strong></th>
				<th><strong>Date</strong></th>
				
			</tr>
			</thead>
			<tbody style="background-color:powderblue">
		<?php
		$sel_query="Select * from tbl_exam where e_no='$id'";
		$result = mysqli_query($conn,$sel_query);
		while($row = mysqli_fetch_array($result)) 
		{ 
		?>
		<tr><td align="center"><?php echo $count; ?></td>
		<td align="center"><?php echo $row["e_no"]; ?></td>
		<td align="center"><?php echo $row["class"]; ?></td>
		<td align="center"><?php echo $row["subject"]; ?></td>
		<td align="center"><?php echo $row["date"]; ?></td>
	
		<?php
}
}
	}

//getting id from url

 
//selecting data associated with this particular id
$result =mysqli_query($conn, "SELECT * FROM tbl_exam ");
 
while($res = mysqli_fetch_array($result))
{
    $id=$res['e_no'];
    $name = $res['subject'];
    $name2 = $res['class'];
	$name1 = $res['date'];
}

?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body style="padding: 150px">
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="updateaction3.php">
        <table width="70%" border="1" style="border-collapse:collapse;" align="right">
            <tr> 
                <td>class</td>
                <td><input type="text" name="class" value="<?php echo $name2;?>"></td>
            </tr>
             <tr> 
                <td>subject</td>
                <td><input type="text" name="subject" value="<?php echo $name;?>"></td>
            </tr>
			 <tr> 
                <td>date</td>
                <td><input type="date" name="date" value="<?php echo $name1;?>"></td>
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