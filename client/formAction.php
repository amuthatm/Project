
<html>
<head>
<title>St harrish school</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <!--<li><a href="#">Home</a></li>
        <li><a href="contact form.html">Contact Us</a></li>
        
        <li><a href="login.html">Student Login</a></li>
        <li><a href="login.html">Staff Login</a></li>-->
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">St.harrish school</a></h1>
      <!--<p>Free Website Template</p>-->
    </div>
    
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="index.php">Home</a></li>
    <!--    <li><a class="drop" href="#"></a>-->
          <ul>
        
          </ul>
        </li>
        <li><a class="drop" href="#">About Us</a>
          <ul>
            <li><a href="vision.php">Our Vision</a></li>
        
          </ul>
        </li>
		
		
        
		
		<li><a class="drop" href="#">Students</a>
		<ul>
             <li><a href="loginpage.php">Student login</a></li>
			 <li><a href="s_achieve.php">Student Achievements</a></li>
			 <li><a href="s_scholar.php">Student Scholars</a></li>
			
			
		<!--	"CONSIDER"
		    <li><a href="vision.html">Profile View Module</a></li>
			<li><a href="vision.html">Attendance View Module</a></li>
			<li><a href="vision.html">Result View Module</a></li>
			<li><a href="vision.html">Fee Detail View Module</a></li> -->
		
		
		
		</ul>	
		</li>
		
        
		
		<li><a class="drop" href="#">Parents</a>
		<ul>
            <li><a href="plogin.php">Parent login</a></li>
		<!--	<li><a href="vision.html">Attendance View Module</a></li>
			<li><a href="vision.html">Result View Module</a></li>
			<li><a href="vision.html">Fee Detail View Module</a></li>  -->
		</ul>	
		</li>
		
		<li><a class="drop" href="#">Staff</a>
		<ul>
            <li><a href="stafflogin.php">Staff login</a></li>
			
		</ul>	
		</li>
		
        <li><a class="drop" href="#">Academics</a>
		<ul>
            <li><a href="curiculum.php">Curriculum</a></li>
			<li><a href="subject.php">Co-Scholastic Subjects</a></li>
			<li><a href="house.php">House System</a></li>
			
		</ul>	
		</li>
		<li><a class="drop" href="#">Admission</a>
          <ul>
            <li><a href="admission.php">Admission procedure</a></li>
        </ul>
		</li>
        <li><a href="gallery.php">Gallery</a></li>
		<li><a href="contactform.php">Contact Us</a></li>
		
      </ul>
	  
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
 <?php 
 
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 
 
 
 
 
 $fname= $_REQUEST["firstname"]; 
 $lname= $_REQUEST["lastname"]; 
 $gender= $_REQUEST["gender"]; 
 $dob= $_REQUEST["dob"];
 $address= $_REQUEST["address"];
 $state= $_POST["state"];
 $class= $_POST["class"];
 $section= $_POST["section"];
 $father= $_REQUEST["fname"];
 $mother= $_REQUEST["mname"];
 $fjob= $_REQUEST["fjob"];
 $mjob= $_REQUEST["mjob"];
  $mobno= $_REQUEST["mobileno"];
  $mail= $_REQUEST["email"];
 $uname= $_REQUEST["uname"];
 $pass= $_REQUEST["passw"];
 
 
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 
 
 
 
 
 
	$sql_u = "SELECT * FROM tbl_user WHERE username='$uname'";
  	
  	$res_u = mysqli_query($conn, $sql_u);
  	

  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken";
       echo "<br><br><br><div style='align:center;  font-size: 25px';>
           <i><b><center>"." Sorry... username already taken"."</center></b></i></div>";
	   exit;
  	}
  
 
 
 
 else{
 
 $sql="INSERT INTO `tbl_user`  VALUES ('','$uname', '$pass','student',1)";
 if($conn->query($sql)=="TRUE"){
	// echo "run successfully";
	 
 }
 
 
 
 
 $sql="select id from tbl_user where username='$uname'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($res);
 $id=$row['id'];
 $id1=$id;
//echo $id;
 
 
 
 $sql4="select fee from `tbl_fee` where class='$class'";
 $res=mysqli_query($conn,$sql4);
 $row=mysqli_fetch_assoc($res);
 $fee=$row['fee'];
 





  
  
  $sql9="INSERT INTO `tbl_studetails` (`student_no`, `s_id`, `first_name`, `last_name`, `dob`, `gender`, `address`, `phone_no`, `email`, `father_name`, `mother_name`, `class`, `sec`, `father_job`, `mother_job`, `native`, `fee`, `fee_status`)
  VALUES (NULL, '$id', '$fname', '$lname', '$dob','$gender', '$address', '$mobno', '$mail', '$father', '$mother', '$class', '$section', '$fjob', ' $mjob', '$state', '$fee', '0')";
     

  if($conn->query($sql9)=="TRUE"){
//	echo "run successfully plus";
	 
 }

  $sql2= "INSERT INTO `tbl_attendance` (`s_id`,`f_Name`,`l_Name``class`,`sec`)VALUES('$id','$fname','$lname','$class','$section')";
 if($conn->query($sql2)=="TRUE"){
    
//	echo "attend";
	}



 $sql3= "INSERT INTO `tbl_marks` (`s_id`,`class`,`sec`)VALUES('$id','$class','$section')";
 if($conn->query($sql3)=="TRUE"){
    
//	echo "attend";
	}	
	


  



echo "<br><br><br><br><br><center><h1>REGISTRATION SUCCESSFUL!<h1></center>";

 }
//if(mysqli_num_rows($res)>0){
  // while($row=mysqli_fetch_assoc($res)){  
 //     echo $row['s_id'];
 //  
  // }}
  // else{
  // echo ".....................no results....................";
  // }
mysqli_close($conn);
 
 
 

 ?>
<br><br><br><br><br><br>
 
 
 </body>
 </html>
