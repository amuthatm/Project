<?php

include("header.php");
?>
<body style="background-color:floralwhite; padding: 150px">

<form name="myForm" method="post" action="" onSubmit="validateForm();">

    <div class="table1"  align="center"  >




        <br>
        <div class="tablerw">




            <br><br>
            <a href="editclassteacher.php"><input type="submit" value="EDIT CLASS TEACHER"  style="background-color:grey ;color:black;" > </a>
            &nbsp; &nbsp; &nbsp; &nbsp;      <a href="editsubjectteacher.php"><input type="button" value="EDIT SUBJECT TEACHER"  style="background-color:grey ;color:black;" > </a>

        </div>

    </div>
</form>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
</html>

