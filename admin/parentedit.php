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
    
   
    $name=$_POST['phone'];
	$name1=$_POST['email'];
	$name2=$_POST['pname'];
 
    // checking empty fields
    //if(empty($name)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
      if(empty($name1)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
      
        
     else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_pdetails SET phone='$name',pemail='$name1',parent_name='$name2' where s_id='$id'");
        
        //redirectig to the display page. In our case, it is index.php

?>
<table  width="78%" border="1" style="border-collapse:collapse;" align="right">
    <thead style="background-color:yellow">
    <tr>


        <th><strong>parentid</strong></th>
        <th><strong>parent name</strong></th>
        <th><strong>sudent id</strong></th>
        <th><strong>phone</strong></th>
        <th><strong>email</strong></th>
        <th><strong>Edit</strong></th>
        <th><strong>Delete</strong></th>

    </tr>
    </thead>
    <tbody style="background-color:powderblue">
    <?php
    $sel_query="Select * from tbl_pdetails where s_id='$id'";
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
    </tr>
        <?php
		}

    }
}

?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result =mysqli_query($conn, "SELECT * FROM tbl_pdetails where s_id='$id'");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['phone'];
     $name1 = $res['pemail'];
	 $name2 = $res['parent_name'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body style="padding: 150px">
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="updateaction4.php">
        <table width="70%" border="1" style="border-collapse:collapse;" align="right">
            <tr> 
                <td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $name;?>"></td>
            </tr>
             <tr> 
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $name1;?>"></td>
            </tr>
             <tr> 
                <td>Name</td>
                <td><input type="text" name="pname" value="<?php echo $name2;?>"></td>
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