<?php

 include ("header.php");
 ?>

<body style="background-color:lightgray; padding: 150px ">

<form name="myForm" method="post" action="teacherAction2.php" onSubmit="validateForm();">

 <div class="table1"  align="center"  >


 <div class="tablerw">

     <h1 align="center">Add Staff</h1>

 </div>

     <div class="tablerw">

         <div class="tablecol">Teacher Id</div>

         <div><input type="text" name="id" id="id" size="30" style="background-color:white; color:black;"></div>

     </div>


<div class="tablerw">

  <div class="tablecol">First Name</div>

  <div><input type="text" name="fname" id="fname" size="30" style="background-color:white; color:black;"></div>

  </div>
     <div class="tablerw">

         <div class="tablecol">Last Name</div>

         <div><input type="text" name="lname" id="lname" size="30" style="background-color:white; color:black;"></div>

     </div>
     <div class="tablerw">

         <div class="tablecol">Gender</div>

         <div><input type="text" name="gender" id="gender" size="30" style="background-color:white; color:black;"></div>

     </div>
     <div class="tablerw">

         <div class="tablecol">Date of Birth</div>

         <div><input type="text" name="dob" id="dob" size="30" style="background-color:white; color:black;"></div>

     </div>
     <div class="tablerw">

         <div class="tablecol">Address</div>

         <div><input type="text" name="address" id="address" size="30" style="background-color:white; color:black;"></div>

     </div>
     <div class="tablerw">

         <div class="tablecol">Phone</div>

         <div><input type="text" name="phone" id="phone" size="30" style="background-color:white; color:black;"></div>

     </div>
     <div class="tablerw">

         <div class="tablecol">Email</div>

         <div><input type="email" name="email" id="email" size="30" style="background-color:white; color:black;"></div>

     </div>


     <div class="tablerw">

         <div class="tablecol">Category</div>

         <div><select name="cat" style="background-color:white; color:black;" >

                 <option value="-1" >select..</option>

                 <option value="A">A</option>

                 <option value="B">B</option>



             </select></div>

     </div>

     <div class="tablerw">

         <div class="tablecol">Years of Experience</div>

         <div><input type="text" name="yos" id="yos" size="30" style="background-color:white; color:black;"></div>

     </div>
     <div class="tablerw">

         <div class="tablecol">Salary</div>

         <div><input type="text" name="salary" id="salary" size="30" style="background-color:white; color:black;"></div>

     </div>
     <br>

     <div class="tablerw">
   <br><br><br>

  <input type="submit" value="REGISTER" align="center" style="background-color:grey;color:black;">&nbsp;&nbsp;
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
