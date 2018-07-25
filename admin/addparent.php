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
<body style="background-color:powderblue">
<form name="pForm" method="post" action="parentAction.php" onSubmit="validateForm();">
 
 <div class="table1"  align="center">


 <div class="tablerw">

  

  <h1 align="center"> Registration Form</h1>

  <br><br>

  </div>



  <div class="tablerw">

  <div class="tablecol">Parent name</div>

  <div><input type="text" name="pname" id="pname" size="30" style="background-color:white; color:black;"></div>

  </div>

  
  <div class="tablerw">

  <div class="tablecol">student id</div>

  <div><input type="text" name="id" id="id" size="30" style="background-color:white; color:black;"></div>

  </div>
   <div class="tablerw">

  <div class="tablecol">phone</div>

  <div><input type="text" name="phone" id="phone" size="30" style="background-color:white; color:black;"></div>

  </div>
  
   <div class="tablerw">

  <div class="tablecol">email</div>

  <div><input type="email" name="email" id="email" size="30" style="background-color:white; color:black;"></div>

  </div>
  
  <div class="tablerw">

  <div class="tablecol">username</div>

  <div><input type="text" name="uname" id="uname" size="30" style="background-color:white; color:black;"></div>

  </div>
  <div class="tablerw">

  <div class="tablecol">password</div>

  <div><input type="password" name="password" id="password" size="30" style="background-color:white; color:black;"></div>

  </div>
  

  
 






 

 <div class="tablerw">
  <br><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
  <input type="submit" value="REGISTER" align="center" style="background-color:yellow ;color:black;">&nbsp;&nbsp;
 <a href="staffregister.php">  <input type="button" value="CLEAR" align="center" style="background-color:yellow;color:black;" > </a>
  

  </div>

  </div>
  </form>


<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
  
  </body>
  </html>