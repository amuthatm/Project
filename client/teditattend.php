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

<br><br>





<?php
// including the database connection file

//including the database connection file

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 

if(isset($_POST['update']))
   {	
	
	
	echo "first";
	$name=$_POST['attendance'];	
	$aid=$_POST['atid'];
	echo $aid;
	 
	
	
	
	
	// checking empty fields
	if(empty($name)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Attendance field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
	
		$result ="UPDATE tbl_attendance SET attendance='$name' WHERE s_id='$aid' ";
	//	$res=mysqli_query($conn,$result);
			
           if($conn->query($result)=="TRUE"){
	              echo "run successfully";
				  
		   $result = mysqli_query($conn,"SELECT class,sec FROM tbl_attendance WHERE s_id='$aid'");
			while($row = mysqli_fetch_array($result))
			{
				
					$class=	$row['class']; 
					$sec = $row['sec']; 
					
					 $_SESSION['class']=$class;
					 $_SESSION['sec']=$sec;
					
			        header("Location: tview.php");
			
			}
				 
		   }  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				 // echo "<a href=tview.php>Back</a>";
				  
				  
				 // include('tview.php');
	              //exit;
                    

		
		//redirectig to the display page. In our case, it is index.php
		//header("Location: tview.php");
	}
}

//getting id from url

 
//selecting data associated with this particular id
/*$result = mysqli_query("SELECT * FROM tbl_attendance WHERE id=$id");
$res=mysqli_query($conn,$result);
if(mysqli_num_rows($res)>0)
{	
while($row= mysqli_fetch_assoc($res))
{
	$name1 = $row['attendence'];
}
}*/
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	

	<?php $aid = $_GET['id'];
          echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$aid;
		  
		
   		  ?>
	<form name="form1" method="post" action="teditattend.php">
	
			<br><br>
		<center> <strong>Attendance</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="attendance" value=""  style="color:black"></center>
			
			
		  
	
		<br><br><br><br>
		
		      <input type="hidden" name="atid" value="<?php echo $aid; ?>">
			  
			  
			  
		
		
          <center>  <input type="submit" name="update" value="update" style="color:black"> </center>
			
		
	</form>
	
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>	
	
	
</body>
</html>