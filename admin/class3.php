

<?php
include("header.php");
?>

        
<body style="background-color:powderblue">

<form name="myForm" method="POST" action="tassign.php" onSubmit="validateForm();">
 
 <div class="table1"  align="center"  >


 <div class="tablerw">

  

  <h<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    
    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                       <!--   <li class="has-sub">  -->
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.html">
                                <i class="fas fa-tachometer-alt"></i> Dashboard</a>
                          <!--  <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>-->
                        </li>
            <!--        <li>
                            <a href="index.html">
                                <i class="fas fa-chart-bar"></i>Admissions</a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fas fa-table"></i>Academics</a>
                        </li>   --> 
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Admission</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Procedure</a>
                                </li>
                                <li>
                                    <a href="index.html">Fee Details</a>
                                </li>
                                
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Academics</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="timetable.html">Time table</a>
                                </li>
                                <li>
                                    <a href="index.html">Exam</a>
                                </li>
                                <li>
                                    <a href="index.html">Marks</a>
                                </li>
                            </ul>
                        </li>
						
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Student</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="studentview.php">View</a>
                                </li>
                                <li>
                                    <a href="addStudent.php">Add</a>
                                </li>
								<li>
                                    <a href="index.html">Edit</a>
                                </li>
								<li>
                                   <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Attendence</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="addAttendance.php">Add</a>
                                </li>
                                <li>
                                    <a href="class.php">View</a>
                                </li>
								<li>
                                    <a href="index.html">Edit</a>
                                </li>
                                
                            </ul>
                        </li>
									
									
									
									
                                </li>
                                <li>
                                    <a href="index.html">Parent Details</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Teacher</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Add</a>
                                </li>
                                <li>
                                    <a href="index.html">View</a>
                                </li>
								<li>
                                    <a href="index.html">Edit</a>
                                </li>
                                
                            </ul>
                        </li>
                  <!--      <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>-->
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Gallery</a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fas fa-map-marker-alt"></i>Messages</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Login</a>
                                </li>
                                <li>
                                    <a href="index.html">Register</a>
                                </li>
                                <li>
                                    <a href="index.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                 
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

                                                          

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>


<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>




			
			
     
        
<body style="background-color:powderblue">

<form name="myForm" method="post" action="exam.php" onSubmit="validateForm();">
 
 <div class="table1"  align="center"  >


 <div class="tablerw">

  

  <h1 align="center"> Select Class <h1>

  

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
  
<br>
  
<div class="tablerw">
   <br><br><br> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
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