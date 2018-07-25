
<?php 

session_start();{
if(isset($_SESSION['uname'])){


    $id= $_SESSION['check'];
}	



else{
	
	 header('Location:loginpage.php');
	 exit;
}
	
}	
?>











<html>
<head>
<title>St harrish school</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/style.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/framework.css" rel="stylesheet" type="text/css" media="all">



</head>
<body id="top">




<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left"><br><br>
      <font size="20px"><strong><b size="30px" style="color:white">&nbsp;St.harrish school</b> </strong></font>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <!--<p>Free Website Template</p>-->
  
    </div>
    
    <!-- ################################################################################################ --> 
  </header>
  <br>
</div>
<!-- ################################################################################################ --> 


<!-- ################################################################################################ --> 

<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="home.php">Home</a></li>
    <!--    <li><a class="drop" href="#"></a>-->
          
        
        <li><a href="studentprofile.php"> Profile</a>
          
        </li>
		
		
        
		
		<li><a class="drop" href="#">Academics</a>
		<ul>
             <li><a href="mark.php">Marks</a></li>
			 <li><a href="exam.php">Exam</a></li>
			 <li><a href="studtimetable.php">Timetable</a></li>
			
			
		<!--	"CONSIDER"
		    <li><a href="vision.html">Profile View Module</a></li>
			<li><a href="vision.html">Attendance View Module</a></li>
			<li><a href="vision.html">Result View Module</a></li>
			<li><a href="vision.html">Fee Detail View Module</a></li> -->
		
		
		
		</ul>	
		</li>
		
        
		
		<li><a  href="attend.php">Attendance</a>
		
		</li>
		
		<li><a  href="fee.php">Fee Detail</a>
			
		</li>
		
        
		
        <li><a href="logout.php">Logout</a></li>
		
     
	  
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<br><br><br>



 <?php
 
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="school";
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 
 
 //   session_start();
    $id= $_SESSION['check'];
 //   echo $id;



	  

	        $sql1="SELECT `class` FROM `tbl_studetails` where s_id='$id'";
			$res1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($res1)>0){
				while($row=mysqli_fetch_assoc($res1)){  
					
	               $class=$row['class'];
					
							
				  }
					
			  }	


echo"<h1><center>EXAM DETAILS</center></h1>";

//echo $class;

$result = mysqli_query($conn,"SELECT * FROM tbl_exam WHERE class='$class'");

echo "<table border='1'style='width:80%; align:center; margin: 0 auto;'>
<tr>
<th>Class</th>
<th>Subject</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td style='text-align:center;'>" . $row['class'] . "</td>";
echo "<td>" . $row['subject'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
	
}
echo "</table>";








	
	
?>

<br>
<br>

<BR>










<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>














</body>
</html>