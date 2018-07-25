

<body style="background-color:lightgray; padding: 150px">

<form name="myForm" method="post" action="fee1.php" onSubmit="validateForm();">

 <div class="table1"  align="center"  >


 <div class="tablerw">



  <h1 align="center">Enter Class and Fee</h1>



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

         <div class="tablecol">Fee</div>

         <div><input type="text" name="fee" id="fee" size="30" style="background-color:white; color:black;"></div>

     </div>





     <br>


     <div class="tablerw">
   <br>
  <input type="submit" name="register" value="REGISTER" align="center" style="background-color:grey;color:black;">&nbsp;&nbsp;
 <a href="feeupdate.php">  <input type="button" value="BACK" align="center" style="background-color:grey ;color:black;" > </a>


  </div>

  </div>
  </form>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
  </body>
</html>
