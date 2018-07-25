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
        
<body style="background-color:lightgray; padding: 150px">

<form name="myForm" method="post" action="markAction.php" onSubmit="validateForm();">
 
 <div class="table1"  align="center"  >


 <div class="tablerw">

  

  <h1 align="center"> Registration Form</h1>

  

  </div>


<div class="tablerw">

  <div class="tablecol">Student Id</div>

  <div><input type="text" name="id" id="id" size="30" style="background-color:white; color:black;"></div>

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

  <div class="tablecol">Subject1</div>

  <div><input type="text" name="sub1" id="sub1" size="30" style="background-color:white; color:black;"></div>

  </div>

  

  <div class="tablerw">

  <div class="tablecol">Subject2</div>

  <div><input type="text" name="sub2" id="sub2" size="30" style="background-color:white; color:black;"></div>

  </div>
  
  <div class="tablerw">

  <div class="tablecol">Subject3</div>

  <div><input type="text" name="sub3" id="sub3" size="30" style="background-color:white; color:black;"></div>

  </div>

  
  <div class="tablerw">

  <div class="tablecol">Subject4</div>

  <div><input type="text" name="sub4" id="sub4" size="30" style="background-color:white; color:black;"></div>

  </div>

  
  <div class="tablerw">

  <div class="tablecol">Subject5</div>

  <div><input type="text" name="sub5" id="sub5" size="30" style="background-color:white; color:black;"></div>

  </div>


 


 

  
  
  
  
  
  

  
  
 
 <div class="tablerw">
   <br><br><br> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
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
