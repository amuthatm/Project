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
	
	
	$class=$_POST['class'];
	$sec=$_POST['sec'];
    $sub=$_POST['sub'];
	$date=$_POST['date'];
		 

	
	 
		//updating the table
	
		$result ="INSERT INTO `tbl_assignment` (`class`, `section`, `topic`, `date`) VALUES ('$class', '$sec', '$sub', '$date')";
	//	$res=mysqli_query($conn,$result);
			
          if($conn->query($result)=="TRUE"){
	         //     echo "Added";
			 
				  
	              header("Location: teditassign.php");
			
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


if (document.myForm.sub.value == "") {
     window.alert("Please enter subject");
     return false;
  }
  
if (document.myForm.date.value == "")  {
	  window.alert("Please select date");
     return false;
  }
	
	
alert("Data have been entered!");
return true;
}

</script>


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

<form name="myForm" method="post" action="teditassign.php" onSubmit="return validate();">
	
			<br><br>
		
		
		<!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		-->

		    <div style=" position: absolute; left: 560px;">
			<strong>Class</strong>&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="class" style="background-color:white; color:black;">

          <option value="-1" >select..</option>

           <option value="I">I</option>

           <option value="II">II</option> <option value="III">III</option> <option value="IV">IV</option> <option value="V">V</option>
			 <option value="VI">VI</option> <option value="VII">VII</option> <option value="VIII">VIII</option> <option value="IX">IX</option>
			 <option value="X">X</option>

				</select>
			</div>
			<br><br>
			
			<div style=" position: absolute; left: 540px;">
			<strong>Section</strong>&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="sec" style="background-color:white; color:black;">

          <option value="-1" >select..</option>

           <option value="a">A</option>

           <option value="b">B</option> 

				</select>
			</div>
			<br><br>
		
		
		<div style=" position: absolute; left: 460px;">
		        <strong>Subject and Topic</strong>&nbsp;&nbsp;
			     <textarea name="sub" row="8" column="100" style="background-color:white; color:black;"></textarea>	</div><br><br><br><br>
		  
	<center> <strong>Date</strong>&nbsp;&nbsp;&nbsp;
			<input type="date" name="date" value="date"  style="color:black"></center>
		
		
		
		<br><br><br><br>
		
		      
			  
			  
		
		
          <center>  <input type="submit" name="update" value="UPDATE" style="color:black;"> 
		  <a href="teditexam.php"> <input type="button" value="CLEAR" align="center" style="color:black;" > </a>
		  </center>
			
		
	</form>



	<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
	
</body>
</html>









