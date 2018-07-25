<?php


$servername="localhost";
$username="root";
$password="";
$dbname="school";


include("header.php");


$id=$_REQUEST['id'];
$name= $_REQUEST["name"];
$class= $_REQUEST["class"];
$section= $_REQUEST["section"];
$subject=$_REQUEST['subject'];


$conn=new mysqli( $servername,$username, $password, $dbname);
if ($conn->connect_error){

    die("connection failed :" .$conn->connect_error);

}


$sql="select t_id from tbl_staff where t_id='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$sql4="select sub_id from tbl_subject where sub_name='$subject'";
$res4=mysqli_query($conn,$sql4);
$row4=mysqli_fetch_assoc($res4);
$id=$row['t_id'];
$sid=$row4['sub_id'];
echo$id;
echo $sid;

$sql1= "INSERT INTO `tbl_sub` (`class`, `sec`, `sub_id`,`sub`, `t_id`, `teacher`) VALUES ('$class', '$section', '$sid', '$subject', '$id', '$name')";
$rsl=mysqli_query($conn,$sql1);


//	echo ="INSERT INTO `tbl_studetails` ('student_no',`s_id`, `first_name`, `last_name`, `dob`, `gender`, `address`, `phone_no`, `father_name`, `mother_name`, `class`, `sec`, `father_job`, `mother_job`,  `native`) VALUES
//	('','$id','$fname', ' $lname', '$dob', '$gender', ' $address', '$mobno', ' $father', ' $mother', ' $class', ' $section', ' $fjob', '$mjob', '$state')";


$qry="SELECT * FROM `tbl_sub` where class='$class' and sec='$section'";
$rs=mysqli_query($conn,$qry);
if($rs){
echo "<br><br><br><br>";



//$row=mysqli_fetch_array($rs);
?>
<table width="77%" border="1" style="border-collapse:collapse;" align="right">
    <thead style="background-color: yellow">
    <th>
        Teacher Id
    </th>
    <th>
        Teacher name
    </th>

    <th>
        Class
    </th>
    <th>
        Section
    </th>

    <th>
        Subject
    </th>
    </thead>

    <?php
    while($row=mysqli_fetch_array($rs))
    {
        echo"<tbody style='background-color: #00aced'>
    <tr>
    <td>".$row['t_id']."</td>
    <td>".$row['teacher']."</td>
    <td>".$row['class']."</td>
    <td>".$row['sec']."</td>
    
   <td>".$row['sub']."</td>
   
    </tr>
         </tbody>";
    }
    ?>
</table>
<?php
}


mysqli_close($conn);

?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>



