
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
 
 
 
 
 
 
 $pname= $_REQUEST["pname"]; 
 $s_id= $_REQUEST["s_id"]; 
 $p_uname= $_REQUEST["p_uname"]; 
 $phone= $_REQUEST["phone"];
 $pemail= $_REQUEST["pemail"];
 $p_password= $_REQUEST["p_password"];
 $relation= $_REQUEST["relation"];

 
 
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 
 
     $sql_u = "SELECT * FROM tbl_user WHERE username='$p_uname'";
  	
  	 $res_u = mysqli_query($conn, $sql_u);
  	

     if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken";
       echo "<br><br><br><div style='align:center;  font-size: 25px';>
           <i><b><center>"." Sorry... username already taken"."</center></b></i></div>";
	   
	    echo "<br><br><br><br><br><br><br><br><br><br><br><br>
                   <i><b><center><a href='parentregister.php'>Back</a></center></b></i>";
	   
	   
	   exit;
	   
	    
				   
  	}
	

	

	
	 $sql1="SELECT `username` FROM tbl_user where id='$s_id' and type='student'";
	 $res1=mysqli_query($conn,$sql1);
 
	 if(mysqli_num_rows($res1) <=0){
				   // echo $row['username'];
					 echo "<br><br><br><div style='align:center;  font-size: 25px';>
                   <i><b><center>"." Sorry...Student ID doesn't exist."."</center></b></i></div>";
				   
				    echo "<br><br><br><br><br><br><br><br><br><br><br><br>
                   <i><b><center><a href='parentregister.php'>Back</a></center></b></i>";
				   
	               exit;
				   
				   
				}
	        
	
	
	
	
	

 
 $sql="INSERT INTO `tbl_user`  VALUES ('','$p_uname', '$p_password','parent',1)";
 
 
 
	
  if($conn->query($sql)=="TRUE"){
	// echo "run successfully";
	 
       }


  
  

     
$sql="select id from tbl_user where username='$p_uname'";
$res=mysqli_query($conn,$sql);

			$row=mysqli_fetch_assoc($res);
			$id=$row['id'];
 
  
 $sql1="INSERT INTO `tbl_pdetails` (`parent_no`, `p_id`, `parent_name`, `s_id`,`phone`,`pemail`, `status`) VALUES ('', $id, ' $pname', ' $s_id',' $phone','$pemail', '1')"; 
  
   if($conn->query($sql1)=="TRUE"){
	// echo "REGISTRATION SUCCESSFUL!";
	 
  }
  
  $sql2="INSERT INTO `tbl_relation_sp` (`s_id`, `p_id`, `relation`, `status`) VALUES ('$s_id', '$id', '$relation', '1')";
   if($conn->query($sql2)=="TRUE"){
	 
	 
  }
  
echo "<br><br><br><br><br><center><h1>REGISTRATION SUCCESSFUL!<h1></center>";
  
mysqli_close($conn);
 
 ?>
 </body>
 </html>
 
 