
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
  
  <script language="JavaScript">

function validateForm() {
  if (document.myForm.sub.value == "") {
     window.alert("Please enter the subject");
     return false;
  }
  
 
  else
     return true;
  }

  
  
  
function validateForm1() {
  if (document.myForm.teach.value == "") {
     window.alert("Please enter the name");
     return false;
  }
  
 
  else
     return true;
  }
  
  
  
  
  
  </script>
</head>




<body>


<?php
	
		 if( isset(($_GET['s1']))!=NULL)	{	
    
	
        $cid = $_GET['c1'];	
		$rid = $_GET['r'];
		//echo $cid ;
		//echo $rid ;
       
		session_start();{	
		
		
		$_SESSION['col']=$cid;
		$_SESSION['id']=$rid;
		$class=$_SESSION['class'];
        $sec=$_SESSION['sec'];
		}

		
	    echo "<br><br><br><br><br>";
		echo " <center><form name='myForm' action='adminedit.php' method='post' onSubmit='return validateForm();'>
				subject :<input type='text' name='sub'>

				<br><br><br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
	//	exit;
		 }
		
		else if(isset(($_GET['s2']))!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['c2'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

	      echo "<br><br><br><br><br>";
		   echo " <center><form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm();'>
				subject :<input type='text' name='sub'>

				<br><br><br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
		 //   exit;
		  
		  
		  
		  }
		else if(isset($_GET['s3'])!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['c3'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

	      echo "<br><br><br><br><br>";
		   echo " <center><form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm();'>
				subject :<input type='text' name='sub'>

				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
		//    exit;
			
			}
		else if(isset(($_GET['s4']))!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['c4'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo "<center> <form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm();'>
				subject :<input type='text' name='sub'>

				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
	//	    exit;
			
			}
		else if(isset(($_GET['s5']))!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['c5'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

	     echo "<br><br><br><br><br>";
		   echo "<center> <form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm();'>
				subject :<input type='text' name='sub'>

				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
	//	    exit;
			
			}
		
		
		else if(isset(($_GET['s6']))!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['c6'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo "<center> <form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm();'>
				subject :<input type='text' name='sub'>

				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
	//	    exit;
			
			}
		
		else if(isset($_GET['s7'])!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['c7'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo "<center> <form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm();'>
				subject :<input type='text' name='sub'>

				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
		//    exit;
			
			}
		
		
		else if(isset($_GET['s8'])!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['c8'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

	         echo "<br><br><br><br><br>";
		   echo " <center><form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm();'>
				subject :<input type='text' name='sub'>

				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
	//	    exit;
			
			}
		
		else if(isset($_GET['t1'])!=NULL){
		
			$rid = $_GET['r'];
       //     echo "    ".$rid;
		    $cid = $_GET['tc1'];
		//    echo "techer".$cid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

	       echo "<br><br><br><br><br>";
		   echo "<center> <form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm1();'>
				teacher :<input type='text' name='teach'>
				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
	//	    exit;
			
			}
		
		else if(isset($_GET['t2'])!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['tc2'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo " <center><form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm1();'>
				teacher :<input type='text' name='teach'>
				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
	//	    exit;
			
			}
		
		else if(isset($_GET['t3'])!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['tc3'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo " <center><form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm1();'>
				teacher :<input type='text' name='teach'>
				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
		//    exit;
			
			}
		
		else if(isset($_GET['t4'])!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['tc4'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo "<center> <form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm1();'>
				teacher :<input type='text' name='teach'>
				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
	//	    exit;
			
			}
		
		else if(isset($_GET['t5'])!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['tc5'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo " <center><form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm1();'>
				teacher :<input type='text' name='teach'>
				<br>
				<input type='submit' name='go' value='go'>
				</form></center>";
		 
		 
	//	    exit;
			
			}
		
		else if(isset(($_GET['t6']))!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['tc6'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo " <center> <form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm1();'>
				teacher :<input type='text' name='teach'>
				<br>
				<input type='submit' name='go' value='go'>
				</form> </center>";
		 
		 
	//	    exit;
			
			}
		else if(isset(($_GET['t7']))!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['tc7'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo " <form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm1();'>
				teacher :<input type='text' name='teach'>
				<br>
				<input type='submit' name='go' value='go'>
				</form>";
		 
		 
	//	    exit;
			
			}
		
		else if(isset($_GET['t8'])!=NULL){
		
			$rid = $_GET['r'];
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;Student ID :".$rid;
		    $cid = $_GET['tc8'];
		    //echo "techer".$sid;
		  
		    session_start();{	
		
		
			$_SESSION['col']=$cid;
			$_SESSION['id']=$rid;
			$class=$_SESSION['class'];
			$sec=$_SESSION['sec'];
		     }

			echo "<br><br><br><br><br>";
		   echo " <form action='adminedit.php' method='post' name='myForm' onSubmit='return validateForm1();'>
				teacher :<input type='text' name='teach'>

				<br>
				<input type='submit' name='go' value='go'>
				</form>";
		 
		 
	//	    exit;
			
			}
		
		
		else{
			echo "INVALID";
	//		exit;
		}
		
		echo "<br><br><br><a href='adminttedit.php'>Back</a>";
		
	
	
	
	
$servername="localhost";
  $username="root";
  $password="";
  $dbname="school";
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
 
     if(isset($_POST['go']))
    {	
	 
	  session_start();{
		  
		  $rid=$_SESSION['id'];		  
		   $cid=$_SESSION['col'];	
	       }
	 
	  echo "1-". $rid;
	  echo "2-". $cid;
	 
	 

			if(isset(($_POST['sub']))!=NULL){
				
			$sub=$_POST['sub'];
			echo  $result=("UPDATE tbl_timetable SET $cid='$sub' WHERE t_no='$rid'");
				$res=mysqli_query($conn,$result);
			
            echo "<br>query executed";
			
          
			 if(! $res ) {
			 die('Could not update data: ' . mysqli_error());}
                 
		
				
									
		    header("Location: adminttedit.php");
				
			exit;
				
		  }	
				
				
			if(isset(($_POST['teach']))!=NULL){

			
			
			  $teach=$_POST['teach'];
			
			echo  $result=("UPDATE tbl_timetable SET $cid='$teach' WHERE t_no='$rid'");
				$res=mysqli_query($conn,$result);
			
            echo "<br>query executed";
			
         
			 if(! $res ) {
			 die('Could not update data: ' . mysqli_error());}
         						
		    header("Location: adminttedit.php");
				
				exit;
				
		  }		
				
		
		   
		  }
		   
		   
	
	
		
		  ?>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>
</body>
<?php


?>

</html>