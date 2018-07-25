<?php
include("header.php");
?>


<body style="background-color:powderblue; padding: 150px">

<form name="myForm" method="post" action="attendanceview1.php" onSubmit="validateForm();">
 
 <div class="table1"  align="center"  >


 <div class="tablerw">

  

  <h1 align="center"> Select Class and Section</h1>

  

  </div>
  
  


 
<div class="tablerw">

  <div class="tablecol">Class</div>

  <div><select name="class" style="background-color:white; color:black;" >

  <option value="-1" >select..</option>

  <option value="I">I</option>

  <option value="II">II</option>

  <option value="III">III</option>

  <option value="IV">IV</option>
  <option value="V">V</option><option value="VI">VI</option><option value="VII">VII</option><option value="VIII">VIII</option><option value="IX">IX</option><option value="X">X</option>

  </select></div>

  </div>
  
  <div class="tablerw">

  <div class="tablecol">Section</div>

  <div><select name="section" style="background-color:white; color:black;">

  <option value="-1" >select..</option>

  <option value="A">A</option>

  <option value="B">B</option>

  

  </select></div>

  </div>
  
  
  
  
  
  
  


 
  <br>
  

  
  
  
 
 <div class="tablerw">
   <br><br><br> 

  <input type="submit" name="register" value="REGISTER" align="center" style="background-color:grey;color:black;">&nbsp;&nbsp;
 <a href="formcheck.php">  <input type="button" value="CLEAR" align="center" style="background-color:grey ;color:black;" > </a>
  

  </div>

  </div>
  </form>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
  </body>
</html>
