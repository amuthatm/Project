
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
<body id="top">



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
 	
		session_start();{
		  $_SESSION['class']=$class;
		  $_SESSION['sec']=$sec;
					}


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
				
					$rid=$row['t_no'];
					
					$id1=$row['p_1'];
					$id2=$row['p_2'];
					$id3=$row['p_3'];
					$id4=$row['p_4'];
					$id5=$row['p_5'];
					$id6=$row['p_6'];
					$id7=$row['p_7'];
					$id8=$row['p_8'];
					
					
					
					$tid1=$row['t_1'];
					$tid2=$row['t_2'];
					$tid3=$row['t_3'];
					$tid4=$row['t_4'];
					$tid5=$row['t_5'];
					$tid6=$row['t_6'];
					$tid7=$row['t_7'];
					$tid8=$row['t_8'];
					
					
					
					$c1='p_1'; 
					$c2='p_2'; 
					$c3='p_3'; 
					$c4='p_4'; 
					$c5='p_5'; 
					$c6='p_6'; 
					$c7='p_7'; 
					$c8='p_8'; 
					
					
					
					$tc1='t_1'; 
					$tc2='t_2'; 
					$tc3='t_3'; 
					$tc4='t_4'; 
					$tc5='t_5'; 
					$tc6='t_6'; 
					$tc7='t_7'; 
					$tc8='t_8'; 
					
					
					
					
					
					
					
					
					
					
					
					echo "<td>" . $row['p_1']."<br>"."<a href='adminedit.php?r=$rid&amp;s1=$id1&amp;c1=$c1 ' />subEdit</a>"."</td>";
					echo "<td>" . $row['p_2']."<br>"."<a href='adminedit.php?r=$rid&amp;s2=$id2&amp;c2=$c2 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_3']."<br>"."<a href='adminedit.php?r=$rid&amp;s3=$id3&amp;c3=$c3 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_4']."<br>"."<a href='adminedit.php?r=$rid&amp;s4=$id4&amp;c4=$c4 ' />subEdit</a>"."</td>";	
					echo "<td>" . " XXXXX "."</td>";
					echo "<td>" . $row['p_5']."<br>"."<a href='adminedit.php?r=$rid&amp;s5=$id5&amp;c5=$c5 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_6']."<br>"."<a href='adminedit.php?r=$rid&amp;s6=$id6&amp;c6=$c6 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_7']."<br>"."<a href='adminedit.php?r=$rid&amp;s7=$id7&amp;c7=$c7 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_8']."<br>"."<a href='adminedit.php?r=$rid&amp;s8=$id8&amp;c8=$c8 ' />subEdit</a>"."</td>";	
						
					echo "</tr>";
					
					echo "<tr>";
					
					echo "<td style='text-align:center;'>" . "" . "</td>";
					
						
					echo "<td>" . $row['t_1']."<br>"."<a href='adminedit.php?r=$rid&amp;t1=$tid1&amp;tc1=$tc1 ' />Edit</a>"."</td>";		
					echo "<td>" . $row['t_2']."<br>"."<a href='adminedit.php?r=$rid&amp;t2=$tid2&amp;tc2=$tc2 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_3']."<br>"."<a href='adminedit.php?r=$rid&amp;t3=$tid3&amp;tc3=$tc3 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_4']."<br>"."<a href='adminedit.php?r=$rid&amp;t4=$tid4&amp;tc4=$tc4 ' />Edit</a>"."</td>";	
					echo "<td>" . "    "."</td>";
					echo "<td>" . $row['t_5']."<br>"."<a href='adminedit.php?r=$rid&amp;t5=$tid5&amp;tc5=$tc5 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_6']."<br>"."<a href='adminedit.php?r=$rid&amp;t6=$tid6&amp;tc6=$tc6 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_7']."<br>"."<a href='adminedit.php?r=$rid&amp;t7=$tid7&amp;tc7=$tc7 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_8']."<br>"."<a href='adminedit.php?r=$rid&amp;t8=$tid8&amp;tc8=$tc8 ' />Edit</a>"."</td>";	
						
					echo "</tr>";
					
				  }
		
	
				  echo "</table>";
		

		}				
			echo "<br><br><a href=admin1.php><center>BACK</center></a>";	
	
      
		
	 }	

   
   else{
          session_start();{
		  $class=$_SESSION['class'];
		  $sec=$_SESSION['sec'];
					}

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
				
					$rid=$row['t_no'];
					
					$id1=$row['p_1'];
					$id2=$row['p_2'];
					$id3=$row['p_3'];
					$id4=$row['p_4'];
					$id5=$row['p_5'];
					$id6=$row['p_6'];
					$id7=$row['p_7'];
					$id8=$row['p_8'];
					
					$tid1=$row['t_1'];
					$tid2=$row['t_2'];
					$tid3=$row['t_3'];
					$tid4=$row['t_4'];
					$tid5=$row['t_5'];
					$tid6=$row['t_6'];
					$tid7=$row['t_7'];
					$tid8=$row['t_8'];
					
					
					$c1='p_1'; 
					$c2='p_2'; 
					$c3='p_3'; 
					$c4='p_4'; 
					$c5='p_5'; 
					$c6='p_6'; 
					$c7='p_7'; 
					$c8='p_8'; 
					
					
					
					$tc1='t_1'; 
					$tc2='t_2'; 
					$tc3='t_3'; 
					$tc4='t_4'; 
					$tc5='t_5'; 
					$tc6='t_6'; 
					$tc7='t_7'; 
					$tc8='t_8'; 
					
					
					
					
					
					
					echo "<td>" . $row['p_1']."<br>"."<a href='adminedit.php?r=$rid&amp;s1=$id1&amp;c1=$c1 ' />subEdit</a>"."</td>";
					echo "<td>" . $row['p_2']."<br>"."<a href='adminedit.php?r=$rid&amp;s2=$id2&amp;c2=$c2 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_3']."<br>"."<a href='adminedit.php?r=$rid&amp;s3=$id3&amp;c3=$c3 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_4']."<br>"."<a href='adminedit.php?r=$rid&amp;s4=$id4&amp;c4=$c4 ' />subEdit</a>"."</td>";	
					echo "<td>" . " XXXXX "."</td>";
					echo "<td>" . $row['p_5']."<br>"."<a href='adminedit.php?r=$rid&amp;s5=$id5&amp;c5=$c5 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_6']."<br>"."<a href='adminedit.php?r=$rid&amp;s6=$id6&amp;c6=$c6 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_7']."<br>"."<a href='adminedit.php?r=$rid&amp;s7=$id7&amp;c7=$c7 ' />subEdit</a>"."</td>";	
					echo "<td>" . $row['p_8']."<br>"."<a href='adminedit.php?r=$rid&amp;s8=$id8&amp;c8=$c8 ' />subEdit</a>"."</td>";	
						
					echo "</tr>";
					
					echo "<tr>";
					
					echo "<td style='text-align:center;'>" . "" . "</td>";
					
						
					echo "<td>" . $row['t_1']."<br>"."<a href='adminedit.php?r=$rid&amp;t1=$tid1&amp;tc1=$tc1 ' />Edit</a>"."</td>";		
					echo "<td>" . $row['t_2']."<br>"."<a href='adminedit.php?r=$rid&amp;t2=$tid2&amp;tc2=$tc2 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_3']."<br>"."<a href='adminedit.php?r=$rid&amp;t3=$tid3&amp;tc3=$tc3 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_4']."<br>"."<a href='adminedit.php?r=$rid&amp;t4=$tid4&amp;tc4=$tc4 ' />Edit</a>"."</td>";	
					echo "<td>" . "    "."</td>";
					echo "<td>" . $row['t_5']."<br>"."<a href='adminedit.php?r=$rid&amp;t5=$tid5&amp;tc5=$tc5 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_6']."<br>"."<a href='adminedit.php?r=$rid&amp;t6=$tid6&amp;tc6=$tc6 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_7']."<br>"."<a href='adminedit.php?r=$rid&amp;t7=$tid7&amp;tc7=$tc7 ' />Edit</a>"."</td>";	
					echo "<td>" . $row['t_8']."<br>"."<a href='adminedit.php?r=$rid&amp;t8=$tid8&amp;tc8=$tc8 ' />Edit</a>"."</td>";	
						
					echo "</tr>";
					
					
					
					
				  }
		
	
				  echo "</table>";
		

		}				
			echo "<br><br><a href=admin1.php><center>BACK</center></a>";	
	
	

   }	


echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
		
</body>
</html>