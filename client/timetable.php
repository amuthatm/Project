
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
 	
			
		
			

			$sql="select * from tbl_timetable where class='$class' AND sec='$sec'";
			$res=mysqli_query($conn,$sql);
			if(mysqli_num_rows($res)>0){
				
				echo "<table border='1'style='width:80%; align:center; margin: 0 auto;'>	
			<tr>
		<th>Day</th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		<th>break</th>
		<th>5</th>
		<th>6</th>
		<th>7</th>
		<th>8</th>
		</tr>";
				
				
				
				
				
				
				
				
				
				while($row=mysqli_fetch_assoc($res)){  
					echo "<tr>";
					
					echo "<td style='text-align:center;'>" . $row['day'] . "</td>";
					
						
					echo "<td>" . $row['p_1']."</td>";		
					echo "<td>" . $row['p_2']."</td>";	
					echo "<td>" . $row['p_3']."</td>";	
					echo "<td>" . $row['p_4']."</td>";	
					echo "<td>" . " XXXXX "."</td>";
					echo "<td>" . $row['p_5']."</td>";	
					echo "<td>" . $row['p_6']."</td>";	
					echo "<td>" . $row['p_7']."</td>";	
					echo "<td>" . $row['p_8']."</td>";	
						
					echo "</tr>";
					
					echo "<tr>";
					
					echo "<td style='text-align:center;'>" . "" . "</td>";
					
						
					echo "<td>" . $row['t_1']."</td>";		
					echo "<td>" . $row['t_2']."</td>";	
					echo "<td>" . $row['t_3']."</td>";	
					echo "<td>" . $row['t_4']."</td>";	
					echo "<td>" . "    "."</td>";
					echo "<td>" . $row['t_5']."</td>";	
					echo "<td>" . $row['t_6']."</td>";	
					echo "<td>" . $row['t_7']."</td>";	
					echo "<td>" . $row['t_8']."</td>";	
						
					echo "</tr>";
					
				  }
		
	
				  echo "</table>";
		

		}				
			echo "<br><br><a href=timetable.php><center>BACK</center></a>";	
	
exit;
		
	 }		
		

		
?>	




<form name="myForm" method="post" action="timetable.php" onSubmit="return validate();">
	
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

           <option value="A">A</option>

           <option value="B">B</option> 

				</select>
			</div>
			<br><br>
		
		

		
		
		
		
		      
	
		
          <center>  <input type="submit" name="go" value="GO" style="color:black;"> 
		  <a href="timetable.php"> <input type="button" value="CLEAR" align="center" style="color:black;" > </a>
		  </center>
			
		
	</form>







<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>




	
		
</body>
</html>