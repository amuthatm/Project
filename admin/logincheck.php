<?php
    include ("connect.php");
    session_start();
    echo"hello";
    if(isset($_POST['submit']))
    {
        echo"hello1";
        $uname=$_POST["username"];
        $pass=$_POST["password"];
        $sql="SELECT * FROM tbl_user where username='$uname'and password='$pass'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        echo"hello2";
        if($count==1)
        {
            $_SESSION['user']=$row["username"];
            echo"hello3";
            header("Location: home.php");
        }
        else
        {
            echo '<script>window.alert("invalid username or password")</script>';
            header("Location:index.php");
        }
    }


?>
