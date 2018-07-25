<?php 

session_start();{
if(isset($_SESSION['pname'])){

     $id= $_SESSION['parent'];
	 $stud_id= $_SESSION['stud'];

}	



else{
	
	 header('Location:plogin.php');
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
        <li><a href="phome.php">Home</a></li>
    <!--    <li><a class="drop" href="#"></a>-->
          
        
        <li><a href="pprofile.php"> Profile</a>
          
        </li>
		
		
        
		
		<li><a class="drop" href="#">Student Academics</a>
		<ul>
		
			<li><a href="ptimetable.php">TimeTable</a></li>
              <li><a href="pexam.php">Exam</a></li>
			 <li><a href="presult.php">Result</a></li>
			
			
		<!--	"CONSIDER"
		    <li><a href="vision.html">Profile View Module</a></li>
			<li><a href="vision.html">Attendance View Module</a></li>
			<li><a href="vision.html">Result View Module</a></li>
			<li><a href="vision.html">Fee Detail View Module</a></li> -->
		
		
		
		</ul>	
		</li>
		
        
		
		<li><a  href="pattend.php">Attendance</a>
		
		</li>
		
		<li><a  href="pfee.php">Fee Detail</a>
			
		</li>
		
        
		
        <li><a href="logout.php">Logout</a></li>
		
     
	  
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<br><br><br>


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
 
 


 //   echo $id;


	      //  $id=$row['id'];  
         

			$sql1="select first_name,last_name,class,sec from tbl_studetails where s_id='$stud_id'";
			$res1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($res1)>0){
				while($row=mysqli_fetch_assoc($res1)){  
					$fname=$row['first_name'];
					$lname=$row['last_name']; 
	                $class=$row['class'];		
					$section=$row['sec'];	 		
							
							
				  }
			}		

			

   		    echo "<center><strong>Parent ID : </strong>";
	        echo $id."</center>";
            echo "\n";
         
 		
			$sql="select parent_name,phone,pemail from tbl_pdetails where p_id='$id'";
			$res=mysqli_query($conn,$sql);
			if(mysqli_num_rows($res)>0){
				while($row=mysqli_fetch_assoc($res)){  
					
						
	                echo "<center><br><strong>Name:</strong>".$row['parent_name']."<center>";	
					echo "<center><br><strong>Student ID:</strong>".$stud_id."<center>";
					echo "<center><br><strong>Student Name:</strong>".$fname."".$lname."<center>";
					
					echo "<center><br><strong>Class:</strong>".$class."<center>";		
					echo "<br><strong>Section:</strong>".$section;	 		
					echo "<br><br><strong>Phone:</strong>".$row['phone'];			
					echo "<br><br><strong>Email:</strong>".$row['pemail'];			
							
							
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