<?php

$servername="localhost";
$username="root";
$password="";
$dbname="school";
$conn=mysqli_connect( $servername,$username, $password, $dbname);
if (!$conn)
{

    die("connection failed :" .mysqli_error($conn));

}

if(isset($_POST['register']))
{
    $name=$_POST['firstname'];
    $name1=$_POST['lastname'];
    $name2=$_POST['gender'];
    $name3=$_POST['dob'];
    $name4=$_POST['address'];
    $name5=$_POST['mobileno'];
    $name6=$_POST['email'];
    $name7=$_POST['category'];
    $name8=$_POST['yos'];
    $name9=$_POST['salary'];
    $uname= $_POST["uname"];
    $pass= $_POST["passw"];
//include ("header.php");
    $sql="INSERT INTO `tbl_user` (`id`, `username`, `password`, `type`, `status`) VALUES (NULL, '$uname', '$pass', 'Teaching', '1')";

    $rslt=mysqli_query($conn, $sql);
    if($rslt)
    {
        echo "run successfully";

    }

    $sql2="select id from tbl_user where username='$uname'";
    $res=mysqli_query($conn,$sql2);
    $row=mysqli_fetch_assoc($res);
    $id=$row['id'];
echo $id;




    $sql1="INSERT INTO `tbl_staff` (`staff_no`, `t_id`, `ff_name`, `ll_name`, `gender`, `tdob`, `taddress`, `tphone`, `temail`, `category`, `yos`, `salary`) VALUES ('','$id','$name','$name1','$name2','$name3','$name4','$name5','$name6','$name7','$name8','$name9')";
    $res1=mysqli_query($conn,$sql1);
    if($res1)
    {
        include("addstaff.php");

    }

    mysqli_close($conn);
}

?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
