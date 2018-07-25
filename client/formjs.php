<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>St harrish school</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/style.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/framework.css" rel="stylesheet" type="text/css" media="all">




<script language="JavaScript">

function validateForm() {
  if (document.myForm.address.value == "") {
     window.alert("Please enter some text into the address field");
     return false;
  }
  
  else if  (document.myForm.gender.value == "") {
     window.alert("Please select gender");
     return false;
  }
  
  
  
  else if(document.myForm.class.selectedIndex=="")
  {
       alert ( "Please select field!");
       return false;
        }
  
   
  else if(document.myForm.section.selectedIndex=="")
  {
       alert ( "Please select field!");
       return false;
        }
  
   
  else if(document.myForm.state.selectedIndex=="")
  {
       alert ( "Please select field!");
       return false;
        }
  
  
  
  else{
     return true;
  }
}
  </script>

</head>
<body id="top">

<!--############################################################################################# --> 

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left"><br><br><br>
      <font size="20px"><strong><a href="index.php"><b size="30px">&nbsp;St.harrish school</b></a> </strong></font>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <label><i class="fa fa-envelope-o"></i> <b>admin@abcschool.ac.in</b></label>&nbsp;&nbsp;
    	<label><i class="fa fa-phone"></i>&nbsp; <b>91-0445-1823456,4824515.</b> </label>
      <!--<p>Free Website Template</p>-->
  
    </div>
    
    <!-- ################################################################################################ --> 
  </header>
  <br>
</div>
<!-- ################################################################################################ --> 
<div class="simages">
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
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->


<br><br><br><br>





<form name="myForm" method="post" action="formAction.php" onSubmit="return validateForm();">
 
 <div class="table1" style="margin:0 450px "  >


 <div class="tablerw">

 <h1 align="center"><b><font size="6px">Registration Form</font></b> </h1>

  </div>
<br><br>

<div class="tablerw">

  <div class="tablecol">First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="firstname" id="firstname" size="30" style="background-color:white; color:black;"  required ></div>

  </div>
<br>

<div class="tablerw">

  <div class="tablecol">Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="lastname" id="lastname" size="30" style="background-color:white; color:black;"></div>

  </div>
<br>
  
<div class="tablerw">

  <div class="tablecol">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="radio" name="gender" value="Male" size="10">Male

  <input type="radio" name="gender" value="Female" size="10" >Female</div>

  </div>
  
  <br>
  <div class="tablerw">

  <div class="tablecol">DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="date" name="dob" id="dob" size="30" style="background-color:white; color:black;" required></div>

  </div>
<br>
 <div class="tablerw">

  <div class="tablecol">Permanent Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    
  <textarea name="address" row="4" column="40" style="background-color:white; color:black;" required></textarea></div>
  </div>


<br>
<div class="tablerw">

  <div class="tablecol">Native&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <select name="state" style="background-color:white; color:black;" required >

  <option value="-1" >select..</option>

  <option value="Kerala">KERALA</option>

  <option value="TN">TN</option>

  <option value="AP">ANDRA</option>

  <option value="Bihar">BIHAR</option>

  </select>

  </div>
  </div>
 <br>
<div class="tablerw">

  <div class="tablecol">Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <select name="class" style="background-color:white; color:black;" required>

  <option value="-1" >select..</option>

  <option value="I">I</option>

  <option value="II">II</option>

  <option value="III">III</option>

  <option value="IV">IV</option>
  <option value="V">V</option><option value="VI">VI</option><option value="VII">VII</option><option value="VIII">VIII</option><option value="IX">IX</option><option value="X">X</option>

  </select></div>

  </div>
  <br>
  <div class="tablerw">

  <div class="tablecol">Section&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <select name="section" style="background-color:white; color:black;" required>

  <option value="-1" >select..</option>

  <option value="A">A</option>

  <option value="B">B</option>

  

  </select></div>

  </div>
  
  
  
  
 <br> 
  
  
<div class="tablerw">

  <div class="tablecol">Father's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="fname" id="fname" size="30" style="background-color:white; color:black;" required></div>

  </div>
<br>
  
  <div class="tablerw">

  <div class="tablecol">Mother's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="mname" id="mname" size="30" style="background-color:white; color:black;" required></div>

  </div>
  <br>
  <div class="tablerw">

  <div class="tablecol">Father's Occupation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="fjob" id="fjob" size="30" style="background-color:white; color:black;" required></div>

  </div>
  <div class="tablerw">
<br>
  <div class="tablecol">Mother's Occupation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="mjob" id="mjob" size="30" style="background-color:white; color:black;" required></div>

  </div>

  
 <br>

<div class="tablerw">

  <div class="tablecol">MobileNo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="mobileno" id="mobileno" size="30" style="background-color:white; color:black;" required></div>

  </div>
  
  
<br>  
<div class="tablerw">

  <div class="tablecol">Email id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="email" name="email" id="email" size="30" style="background-color:white; color:black;" required ></div>

  </div>
  
  <br>
  <div class="tablerw">

  <div class="tablecol">Choose your username&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="uname" id="uname" size="30" style="background-color:white; color:black;" required></div>

  </div>
  <br>
  <div class="tablerw">

  <div class="tablecol">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="password" name="passw" id="passw" size="30" style="background-color:white; color:black;" required ></div>

  </div>

 
  <br>
  

  
  
  
 
 <div class="tablerw">
   <br><br><br> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input type="submit" value="REGISTER" align="center" style="background-color:gray;color:black;">&nbsp;&nbsp;
 <a href="formjs.php">  <input type="button" value="CLEAR" align="center" style="background-color:gray ;color:black;" > </a>
  

  </div>

  </div>
  
  </form>
























<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
    
      <div class="one_third">
        <address>
        St.Harrison School<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        <i class="fa fa-phone pright-10"></i> xxxx xxxx xxxxxx<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="feedbackform.php">Give Us Feedback</a>
        </address>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
        <form class="clear" method="post" action="#">
          <fieldset>
       
	   
	   
          </fieldset>
        </form>
      </div>

	  </footer>
  </div>
</div>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>



</body>
</html>
