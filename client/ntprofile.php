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
        <li><a href="nonteachhome.php">Home</a></li>
    <!--    <li><a class="drop" href="#"></a>-->
          
        
        <li><a href="ntprofile.php"> Profile</a>
          
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
 
 
  
	
	echo "<br><center><strong>Staff ID:</strong>".$id."<center><br>";			
   
	        $sql1="SELECT `ff_name`,`ll_name`,`tdob`,`taddress`,`tphone`,`category`,`yos`,`salary` FROM `tbl_staff` where t_id='$id'";
			$res1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($res1)>0){
				while($row=mysqli_fetch_assoc($res1)){  
					
	                echo "<center><strong>Name       :	</strong>";
					echo $row['ff_name']." ".$row['ll_name']."</center> ";
					echo "<br><center><strong>Category:</strong>".$row['category']."</center>";		
					echo "<br><center><strong>DOB:</strong>".$row['tdob']."</center>";		
					echo "<br><center><strong>Address:</strong>".$row['taddress']."</center>";	 		
					echo "<br><center><strong>Phone:</strong>".$row['tphone']."</center>";			
					echo "<br><center><strong>Years of Service:</strong>".$row['yos']."</center>";			
					echo "<br><center><strong>Salary:</strong>".$row['salary']."<center>";			
							
							
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