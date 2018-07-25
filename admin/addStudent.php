
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
include("header.php");
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 if(isset ($_REQUEST['username']) && ($_REQUEST['password']))
	{
		    $name = $_REQUEST["username"]; 
            $password = $_REQUEST["password"]; 


        $sql="select id from tbl_user where username='$name' and password='$password'";
			$res=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($res);
            if(mysqli_num_rows($res)>0)
            { 
            }
             else
			 {
				 echo"incorrect username and password";
				 exit;
			 }

	}

?>
<body style="background-color: lightgray; padding: 150px">

<form name="myForm" method="post" action="studentaction.php" onSubmit="validateForm();">
 
 <div class="table1"  align="center"  >


 <div class="tablerw">

  

  <h1 align="center"> Registration Form</h1>

  

  </div>
  
  

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

  <div class="tablecol">Native</div>

  <div><select Name="state" style="background-color:white; color:black;" >

  <option value="-1" >select..</option>

  <option value="Kerala">KERALA</option>

  <option value="TN">TN</option>

  <option value="AP">ANDRA</option>

  <option value="Bihar">BIHAR</option>

  </select></div>

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
  
  
  
  
  
  
  
<div class="tablerw">

  <div class="tablecol">Father's Name</div>

  <div><input type="text" name="fname" id="fname" size="30" style="background-color:white; color:black;"></div>

  </div>

  
  <div class="tablerw">

  <div class="tablecol">Mother's Name</div>

  <div><input type="text" name="mname" id="mname" size="30" style="background-color:white; color:black;"></div>

  </div>
  
  <div class="tablerw">

  <div class="tablecol">Father's Occupation</div>

  <div><input type="text" name="fjob" id="fjob" size="30" style="background-color:white; color:black;"></div>

  </div>
  <div class="tablerw">

  <div class="tablecol">Mother's Occupation</div>

  <div><input type="text" name="mjob" id="mjob" size="30" style="background-color:white; color:black;"></div>

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
?>
  </body>
</html>
