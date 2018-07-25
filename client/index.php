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
<br>




<div class="slideshow-container">

<div class="mySlides fade" align="center">
  <div class="numbertext">1 / 5</div>
  <img src="images/demo/1.jpg" >
 
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext">2 / 5</div>
  <img src="images/demo/2.jpg" >
  
</div>

<div class="mySlides fade"align="center">
  <div class="numbertext">3 / 5</div>
  <img src="images/demo/3.jpg" >
</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
</div>
<br>

<!--<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
   
</div>
-->
<script language="JavaScript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


 



  
  
</script>

      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>

<!-- ################################################################################################ -->
<br><br><br><br>



 <div class="clr"></div>
  <p>	 
         

		  <div class="post_content" style="color:black">
		<img src="images/4.jpg"  alt="" class="spic" />
This school is an institution designed to provide learning spaces and learning environments
 for the teaching of students (or "pupils") under the direction of teachers.
 Most countries have systems of formal education, which is commonly compulsory.
 In these systems, students progress through a series of schools. 
 <br>
 Our school include primary school for young children and secondary school for 
 teenagers who have completed primary education. An institution where higher education is taught,
 is commonly called a university college or university.
In addition to these core schools, students in our country may also attend schools before and after primary and secondary education.
 Kindergarten or pre-school provide some schooling to very young children .
 University, vocational school, college or seminary may be available after secondary school.<br>
 This school may be dedicated to one particular field, such as a school of economics or a school of dance. 
 Alternative schools may provide nontraditional curriculum and methods.
 We provide hundred percent efforts in gaining knowledge for students.
    </p>  </div>
         
<br><br><br>		  
<div class="wrapper row3">

<div class="article">
         
          
          <div class="clr"></div>
		   
         <img src="images/5.jpg" width="100" height="100" alt="" class="new" />
           <h2 style="color:black; text-align:center"; class="high"><em><font size="40px";>&nbsp;&nbsp;&nbsp;Principal's Message</em></font></h2>
		  <div class="post_content">
            <p style="text-align:center"><br><br>&nbsp;&nbsp;&nbsp;Let me start by saying a big thanks to you dear parents for taking your 
			time and being present here this morning.
			Years ago you brought<br>&nbsp;&nbsp;&nbsp; a very&nbsp;hesitant son or a daughter to this school. 
			Now it is time to take back home a very confident, competent, committed and hopefully a &nbsp;&nbsp;compassionate &nbsp;future citizen. 
			Thank you for your unique contribution in forming your ward! 
			Most of the teachers who taught them are <br>present here this &nbsp;morning.&nbsp; Do meet them and say a word of appreciation to
			them as some of you may not be coming to school again.<br>
			You may not come but be sure &nbsp;that you will &nbsp;ever be part of the St.Harrison family. <br>
			Thank You
          </p>
		  </div>
          <div class="clr"></div>
        </div>

</div>
<br><br><br><br><br><br><br>
<p style="color:black text-align:center" ;><font size="13px" color="#985d21"><center><i class="quote">"Education is what remains after one has forgotten what one has learned in school."</i></center></font></p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="text-align:center; font-size:18px;"><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 - Albert Einstein</font></p>


<!-- ################################################################################################ -->

<br><br><br><br>





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