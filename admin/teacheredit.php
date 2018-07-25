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
 
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
 $name=$_POST['tfirstname'];
 $name2= $_REQUEST["tlastname"]; 
 $name3= $_REQUEST["tgender"]; 
 $name4= $_REQUEST["tdob"];
 $name5= $_REQUEST["taddress"];
 $name6= $_REQUEST["category"];
 $name7= $_REQUEST["mobileno"];
 $name8= $_REQUEST["yos"];
 $name9= $_REQUEST["salary"];
 
    // checking empty fields
    if(empty($name)) {            
        if(empty($name)) {
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
        
        
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_staff SET ff_name='$name',ll_name='$name2',gender='$name3',tdob='$name4',taddress='$name5',category='$name6',tphone='$name7',yos='$name8',salary='$name9'where t_id='$id'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: teacheredit1.php");
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
    $name = $res['ff_name'];
   $name2= $res["ll_name"]; 
 $name3= $res["gender"]; 
 $name4= $res["tdob"];
 $name5= $res["taddress"];
 $name6= $res["category"];
 $name7= $res["tphone"];
 $name8= $res["yos"];
 $name9= $res["salary"];
 
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="home.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="">
        <table border="0">
            <tr> 
                <td>attendance</td>
                <td><input type="text" name="tfirstname" value="<?php echo $name;?>"></td>
            </tr>
			<tr> 
                <td>attendance</td>
                <td><input type="text" name="tlastname" value="<?php echo $name2;?>"></td>
            </tr>
			<tr> 
                <td>attendance</td>
                <td><input type="text" name="tgender" value="<?php echo $name3;?>"></td>
            </tr>
			<tr> 
                <td>attendance</td>
                <td><input type="text" name="tdob" value="<?php echo $name4;?>"></td>
            </tr>
			<tr> 
                <td>attendance</td>
                <td><input type="text" name="taddress" value="<?php echo $name5;?>"></td>
            </tr>
			<tr> 
                <td>attendance</td>
                <td><input type="text" name="category" value="<?php echo $name6;?>"></td>
            </tr>
			<tr> 
                <td>attendance</td>
                <td><input type="text" name="mobileno" value="<?php echo $name7;?>"></td>
            </tr>
			<tr> 
                <td>attendance</td>
                <td><input type="text" name="yos" value="<?php echo $name8;?>"></td>
            </tr>
			<tr> 
                <td>attendance</td>
                <td><input type="text" name="salary" value="<?php echo $name9;?>"></td>
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