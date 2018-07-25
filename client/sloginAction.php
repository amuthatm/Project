

 <?php 
 
// echo"<h1>Details</h1><br><br>";
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
	 
 
 
      if(isset ($_REQUEST['s_username']) && ($_REQUEST['s_password']))
     {
		    $name = $_REQUEST["s_username"]; 
            $password = $_REQUEST["s_password"]; 
			
			$sql="select id from tbl_user where username='$name' and password='$password'";

			$res=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($res);
            if(mysqli_num_rows($res)>0)
            { 
                    $id=$row['id'];  
					 session_start();{
						 $_SESSION['sname']=$name;
	                     $_SESSION['t']=$id;
						 }
          
		          //  echo $id;
					
					$sql1="select type from tbl_user where id='$id'";
			        $res1=mysqli_query($conn,$sql1);
			        $row1=mysqli_fetch_assoc($res1);
					
				        if(mysqli_num_rows($res1)>0){
					     
						
	
						$type=$row1['type'];
					//	echo $type;
						 
						if($type=="Non-Teaching")
						{
					//	  echo "non-teaching correct";
                          $flag=0;	
						 
						  
						  header('Location:nonteachhome.php');	
                        
						  
						}
						
						else if($type=="Teaching")
				        {
						 // echo "teaching correct";
                          $flag=1;	
						  header('Location:teachhome.php');	
						  
						}
				
				
				
						else
						{
						//echo'The username or password are incorrect!!';
						
						header('Location: loginfail.php');
						exit;	
						}
					}
					
				
		  
			}
            				
            
            else
            {
                //echo'The username or password are incorrect!';
				header('Location: loginfail.php');
				exit;
            }
		
	}
		
	
   else{
	   
	   
	  header('Location:stafflogin.php');  
   echo ".....................enter the details....................";
   exit;
   }
 
$conn->close();
 
 ?>
 
 


		