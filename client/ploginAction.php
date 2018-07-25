 
<?php 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
	 
 
 
if(isset ($_REQUEST['p_username']) && ($_REQUEST['p_password']))
	{			
            $name = $_REQUEST["p_username"]; 
            $password = $_REQUEST["p_password"]; 
			
			$sql="select id from tbl_user where username='$name' and password='$password'";

            $res=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($res);
            if(mysqli_num_rows($res)>0)
            { 	
					$id=$row['id'];
					
					
					
					
					$sql1="select type from tbl_user where id='$id'";
			        $res1=mysqli_query($conn,$sql1);
			        $row1=mysqli_fetch_assoc($res1);
				    if(mysqli_num_rows($res1)>0)
					{
						$type=$row1['type'];
						if($type=="parent")
							{
							
								
						session_start();
						{
							$_SESSION['pname']=$name;
							
							
						}
						
						}
		      	
						else
						{
							
							header('Location: loginfail.php');
						echo'The username or password are incorrect!';
						exit;	
						}
					}
					
					
					
					$sql1="select s_id from tbl_pdetails where p_id='$id'";
					$res1=mysqli_query($conn,$sql1);
					$row1=mysqli_fetch_assoc($res1);
					if(mysqli_num_rows($res1)>0)
					{
						$stud_id=$row1['s_id'];
						//echo $stud_id;
											
						
						
							$_SESSION['stud'] = $stud_id;
						    $_SESSION['parent']=$id;
							//$s_id= $_SESSION['check'];
							
						
						
					}	
					
					
			
            }
			else{
				//echo "Username or Password INVALID";
				header('Location: loginfail.php');

				exit;
			}
			
			
			
	}
	
	
	
else{
	header('Location:plogin.php');
	echo "<h1>Enter the details</h1>";
	exit;
}	
?>
			
<html>

<body>


	
		   
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
<div class="nn" style="align:center;  font-size: 25px";>
<i><b><center>WELCOME TO ST.HARRISON SCHOOL!</center></b></i>



<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>
			
			
			




