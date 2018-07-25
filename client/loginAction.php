
<html>
<head>
<title>St harrish school</title><meta charset="utf-8">
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
<div class="body1" style="align:center;  font-size: 25px";>
<i><b><center>WELCOME TO ST.HARRISON SCHOOL!</center></b></i>
</div>






<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>





</body>
</html>
		
		
	


















<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 if(isset ($_REQUEST['username']) && ($_REQUEST['password']))
	{
		    $name = $_REQUEST["username"]; 
            $password = $_REQUEST["password"]; 
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
                    if($type=="student")
					{
						
						session_start();
						{
							$_SESSION['uname']=$name;
							$_SESSION['check'] = $id;
							
						}
						
						
					}
		      	
				    else
				    {
						header('Location: loginfail.php');
				       echo'The username or password are incorrect!';
				       exit;	
				     }
				}
				
			}
			
			else
            {
				header('Location: loginfail.php');
                //echo'The username or password are incorrect!';
				exit;
            }
		
	}
   else
   {
	 
	 header('Location:loginpage.php');  
	echo ".....................enter the details....................";  
    exit;	
   }	   
			
			
			
	?>	
		
		   


			
<?php		

    //session_start();
   // $_SESSION['check'] = $id;
   
?>


