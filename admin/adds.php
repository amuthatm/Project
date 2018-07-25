<?php


 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
include("header.php");


?>
<body style="background-color: lightgray; padding: 150px">

<form name="myForm" method="post" action="staffaction.php" onSubmit="validateForm();">

 <div class="table1"  align="center"  >


 <div class="tablerw">



  <h1 align="center"> Registration Form</h1>






<div class="tablerw">

 <div class="tablecol">First Name</div>

  <div><input type="text" name="firstname" id="firstname" size="30" style="background-color:white; color:black;"></div>

  </div>

<div class="tablerw">

  <div class="tablecol">Last Name</div>

  <div><input type="text" name="lastname" id="lastname" size="30" style="background-color:white; color:black;"></div>

  </div>


<div class="tablerw">

  <div class="tablecol">Gender</div>

  <div><input type="radio" name="gender" value="male" size="10">Male

  <input type="radio" name="gender" value="Female" size="10">Female</div>

  </div>
  <div class="tablerw">

  <div class="tablecol">DOB</div>

  <div><input type="date" name="dob" id="dob" size="30" style="background-color:white; color:black;"></div>

  </div>

 <div class="tablerw">

  <div class="tablecol">Permanent Address</div>

    <div>
  <textarea name="address" row="4" column="40" style="background-color:white; color:black;"></textarea></div>
  </div>

     <div class="tablerw">

  <div class="tablecol">MobileNo</div>

  <div><input type="text" name="mobileno" id="mobileno" size="30" style="background-color:white; color:black;" ></div>

  </div>
  <div class="tablerw">

  <div class="tablecol">Email</div>

  <div><input type="email" name="email" id="email" size="30" style="background-color:white; color:black;" ></div>

  </div>


     <div class="tablerw">

         <div class="tablecol">Category</div>

         <div><select name="category" style="background-color:white; color:black;">

                 <option value="-1" >select..</option>

                 <option value="Teaching">Teaching</option>

                 <option value="Non-Teaching">Non-Teaching</option>



             </select></div>

     </div>


     <div class="tablerw">

         <div class="tablecol">Yos</div>

         <div><input type="text" name="yos" id="yos" size="30" style="background-color:white; color:black;" ></div>

     </div>

     <div class="tablerw">

         <div class="tablecol">Salary</div>

         <div><input type="text" name="salary" id="salary" size="30" style="background-color:white; color:black;" ></div>

     </div>



  <div class="tablerw">

  <div class="tablecol">Choose your username</div>

  <div><input type="text" name="uname" id="uname" size="30" style="background-color:white; color:black;" ></div>

  </div>

  <div class="tablerw">

  <div class="tablecol">Password</div>

  <div><input type="password" name="passw" id="passw" size="30" style="background-color:white; color:black;" ></div>

  </div>


  <br>






 <div class="tablerw">
   <br>
  <input type="submit"  name="register" value="REGISTER" align="center" style="background-color:grey;color:black;">&nbsp;&nbsp;
 <a href="formcheck.php">  <input type="button" value="CLEAR" align="center" style="background-color:grey ;color:black;" > </a>


  </div>

  </div>
  </form>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>s
  </body>
</html>
