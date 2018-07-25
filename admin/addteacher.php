<?php

include("header.php");
?>
<body style="background-color:floralwhite; padding: 150px">

<form name="myForm" method="post" action="teacherAction2.php" onSubmit="validateForm();">
 
 <div class="table1"  align="center"  >




     <br>
     <div class="tablerw">




         <br><br>
         <a href="addclassteacher.php"><input type="submit" value="ADD CLASS TEACHER"  style="background-color:grey ;color:black;" > </a>
   &nbsp; &nbsp; &nbsp; &nbsp;      <a href="addsubjectteacher.php"><input type="button" value="ADD SUBJECT TEACHER"  style="background-color:grey ;color:black;" > </a>

     </div>

  </div>
  </form>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
  </body>
</html>
