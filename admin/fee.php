

<html>
<head>


<script language="JavaScript">

function validate()
{
if(document.myForm.class.selectedIndex=="")
{
alert ( "Please select field!");
return false;
}



if(document.myForm.sec.selectedIndex=="")
{
alert ( "Please select field!");
return false;
}
}
</script>

</head>
<body id="top">



<?php


  $servername="localhost";
  $username="root";
  $password="";
  $dbname="school";

 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){

	 die("connection failed :" .$conn->connect_error);

 }



  if(isset($_POST['go']))
   {

		$class=$_POST['class'];
	    $sec=$_POST['sec'];
	    echo "<center>CLASS :".$class."&nbsp;&nbsp;&nbsp;SECTION :". $sec."</center>";
	     ECHO "<BR><BR><BR>";

		session_start();{
		  $_SESSION['class']=$class;
		  $_SESSION['sec']=$sec;
					}


			$sql="select  s_id,first_name,last_name,class,sec,fee,fee_status from tbl_studetails where class='$class' AND sec='$sec'";
			$res=mysqli_query($conn,$sql);
			if(mysqli_num_rows($res)>0){

				echo "<table border='1'style='width:80%; align:center; margin: 0 auto;'>	
			   
                  <tr>
                  <th>student id</th>
                  <th> Name</th>
                  <th>Class</th>
                  <th>Section </th>
                  <th>Fee</th>
                  <th>Fee Status</th>
                  <th>Edit</th>

                 </tr>";
?>
<?php
    while ($row = mysqli_fetch_array($res)) {

        echo "<tr>";
        echo "<td>" . $row['s_id'] . "</td>";
        echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
        echo "<td>" . $row['class'] . "</td>";
        echo "<td>" . $row['sec'] . "</td>";
        echo "<td>" . $row['fee'] . "</td>";
        if ($row['fee_status']==0) {
            echo "<td>"."Fee not paid"."</td>";
        } else {
            echo " <td>"."Fee paid "."</td>";
        }
      ?>
        <td align="center">
            <a href="edit5.php?id=<?php echo $row["s_id"]; ?>">Edit</a>
        </td>
<?php
    }
    echo "</table>";

}
?>



 <?php

	 }


   else {
       session_start();
       {
           $class = $_SESSION['class'];
           $sec = $_SESSION['sec'];
       }

       echo "<center>CLASS :" . $class . "&nbsp;&nbsp;&nbsp;SECTION :" . $sec . "</center>";
       ECHO "<BR><BR><BR>";


       $sql = "select s_id,first_name,last_name,class,sec,fee,fee_status from tbl_studetails where class='$class' AND sec='$sec'";
       $res = mysqli_query($conn, $sql);
       if (mysqli_num_rows($res) > 0) {

           echo "<table border='1'style='width:80%; align:center; margin: 0 auto;'>	
			<tr>
			<th>student id</th>
                  <th> Name</th>
                  <th>Class</th>
                  <th>Section </th>
                  <th>Fee</th>
                  <th>Fee Status</th>
                  <th>Edit</th>
	        </tr>";


           while ($row = mysqli_fetch_assoc($res)) {


               echo "<tr>";
               echo "<td>" . $row['s_id'] . "</td>";
               echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
               echo "<td>" . $row['class'] . "</td>";
               echo "<td>" . $row['sec'] . "</td>";
               echo "<td>" . $row['fee'] . "</td>";
               if ($row['fee_status'] == 0) {
                   echo "<td>" . "Fee not paid" . "</td>";
               } else {
                   echo " <td>" . "Fee paid " . "</td>";
               }
               ?>
               <td align="center">
                   <a href="edit5.php?id=<?php echo $row["s_id"]; ?>">Edit</a>
               </td>
               <?php
           }
           echo "</table>";

           }

           }

   ?>
</body>
<br><br>
<div align="center">
    <a href="feeedit.php"><input type="button" value="BACK"></a>
</div>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</html>