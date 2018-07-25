<?php 

session_start();{
if(isset($_SESSION['sname'])){

    $id=$_SESSION['t'];
}	



else{
	
	 header('Location:stafflogin.php');
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




<!-- ################################################################################################ --> 

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

<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
       <li><a href="teachhome.php">Home</a></li>
    <!--    <li><a class="drop" href="#"></a>-->
          
        
        <li><a href="tprofile.php"> Profile</a>
          
        </li>
		
		
        
		  <li><a href="timetable.php"> Timetable</a> </li>
		
		
        
		
		<li><a  href="#">Attendance</a>
		<ul>
		   <li><a href="tattend.php">Attendance View </a></li>
		   <li><a href="tattend1.php">Attendance Edit</a></li>
		
		</ul>
		</li>
		
		
		
		
		
		
		
		
		<li><a  href="#">Exam</a>
		
		<ul>
		   <li><a href="texam.php">Exam View </a></li>
		   <li><a href="teditexam.php">Exam Add</a></li>
		
		</ul>
			
		</li>
		
		<li><a  href="#">Assignment</a>
		<ul>
		   <li><a href="tassign.php">Assignment View </a></li>
		   <li><a href="teditassign.php">Assignment Add</a></li>
		
		</ul>
			
			
		</li>
		
		
        
		
        <li><a href="logout.php">Logout</a></li>
     
	  
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<br><br><br>


<?php
$conn=mysqli_connect("localhost","root","","school");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$result = mysqli_query($conn,"SELECT * FROM tbl_exam");

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

mysqli_close($conn);
?>

<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>


</body>
</html>














