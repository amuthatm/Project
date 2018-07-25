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


	      //  $id=$row['id'];  
           // echo "<center><strong>Student ID : </strong>";
	        //echo $id."</center><br>";
            echo "\n";
         
 
 
			/*$sql="select first_name,last_name,class,sec,dob,father_name,mother_name,address,phone_no from tbl_studetails where s_id='$id'";
			$res=mysqli_query($conn,$sql);
			if(mysqli_num_rows($res)>0){
				while($row=mysqli_fetch_assoc($res)){  
					$name=$row['first_name'];
						$lname=$row['last_name']; 
	                 echo "<center><strong>Name       :	</strong>";
						echo $name." ".$lname."</center> ";
					echo "<center><br><strong>Class:</strong>".$row['class']."<center>";		
					echo "<br><strong>Section:</strong>".$row['sec'];	 		
					echo "<br><br><strong>DOB:</strong>".$row['dob'];			
					echo "<br><br><strong>Father name:</strong>".$row['father_name'];			
					echo "<br><br><strong>Mother name:</strong>".$row['mother_name'];			
					echo "<br><br><strong>Address:</strong>".$row['address'];			
					echo "<br><br><strong>Phone no:</strong>".$row['phone_no'];			
							
				  }
			}*/		
	
	
	        $sql1="select sub1,sub2,sub3,sub4,sub5 from tbl_marks where s_id='$id'";
			$res1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($res1)>0){
				echo "<center><h1>MARKS</h1></center>";
				while($row=mysqli_fetch_assoc($res1)){  
						echo "<br><center><strong>Sub1 :</strong>".$row['sub1']."</center>";	
						echo "<br><center><strong>Sub2 :</strong>".$row['sub2']."</center>";
						echo "<br><center><strong>Sub3 :</strong>".$row['sub3']."</center>";
						echo "<br><center><strong>Sub4 :</strong>".$row['sub4']."</center>";
						echo "<br><center><strong>Sub5 :</strong>".$row['sub5']."</center>";
					}
			}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 ?>






<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>









</body>
</html>