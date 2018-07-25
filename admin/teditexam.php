<?php
include("header.php");
?>
<body style="background-color:lightgray; padding:150px">
<form name="myForm" method="post" action="examaction.php" onSubmit="return validate();">
	
			<br><br>
		
		
		<!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		-->
		<center> <strong>exam no</strong>&nbsp;&nbsp;
			<input type="text" name="id" value="id"  style="color:black"></center>	<br>

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
		
			
		<center> <strong>Subject</strong>&nbsp;&nbsp;
			<input type="text" name="subject" value="subject"  style="color:black"></center>	<br>
		  
	<center> <strong>Date</strong>&nbsp;&nbsp;&nbsp;
			<input type="date" name="date" value="date"  style="color:black"></center>
		
		
		
		<br><br><br><br>
		
		      
			  
			  
		
		
          <center>  <input type="submit" name="register" value="UPDATE" style="color:black;"> 
		  <a href="teditexam.php"> <input type="button" value="CLEAR" align="center" style="color:black;" > </a>
		  </center>
			
		
	</form>

<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>

</body>
</html>









