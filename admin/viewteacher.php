<?php


include("header.php");
?>
<body style="background-color:floralwhite; padding: 150px">

<form name="myForm" method="post" action="teacherAction2.php" onSubmit="validateForm();">

 <div class="table1"  align="center"  >




     <br>
     <div class="tablerw">




         <br><br>
         <a href="viewclassteacher.php"><input type="submit" value="VIEW CLASS TEACHER"  style="background-color:grey ;color:black;" > </a>
   &nbsp; &nbsp; &nbsp; &nbsp;      <a href="viewsubjectteacher.php"><input type="button" value="VIEW SUBJECT TEACHER"  style="background-color:grey ;color:black;" > </a>

     </div>

  </div>
  </form>
<?php
echo"<BR><BR><BR><BR><BR><BR><BR><BR>";
include("footer.php");
?>
  </body>
</html>
