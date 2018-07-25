
<html>
<head>

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
<body style="padding: 150px ; color:black">




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

				echo "<table border='1'style='width:80%; align:right; margin: 0 auto;'>	
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
			echo "<br><br><a href=atimetable.php><center>BACK</center></a>";	
	
exit;
		
	 }		
		

include ("header.php");
?>	




<form name="myForm" method="post" action="atimetable.php" onSubmit="return validate();">
	
			<br><br>
		

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
		
		

		
		
		
		
		      
	
		<br><br>
          <center>  <input type="submit" name="go" value="SUBMIT" style="color:black;">
		  <a href="home.php"> <input type="button" value="BACK" align="center" style="color:black;" > </a>
		  </center>
			
		
	</form>


</body>
</html>
<?php
echo"<br><br><br><br><br><br>";
include("footer.php");
?>