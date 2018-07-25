<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="style1.css">
 
<link href="layout/styles/framework.css" rel="stylesheet" type="text/css" media="all">  
  <script language="JavaScript">

function validateForm() {
  if (document.studForm.address.value == "") {
     window.alert("Please enter some text into the address field");
     return false;
  }
  else
     return true;
  }

  </script>
</head>
<body>
<div class="login-page">
<div class="form">

												
										
							<form class="login"  name="studForm" method="post"  action="loginAction.php" onSubmit="validateForm();">
												
							        <strong>UserName</strong><input type='text' placeholder="enter username" name="username" required>
									
									
								
								<br><br><br><br>
								<div class="tablerw">
								<div class="tablecol"><strong>Password</strong></div>
								<div>
									<input type='password' placeholder="enter password"  name="password" required>
									
									</div>
								</div>
									<br><br><br>
														    <div class="tablerw">
															<div>
																<input type='submit' name='LOGIN' value="LOGIN">
															<a  href="index.php">    <input type='BUTTON'   name='back' value='BACK'></a>
																<p class="message">Not registered?<a href="formjs.php">REGISTER</a></p>
															</div>	
																
															</div>	
																
																
													</div>
													
															</form>
</div>


 
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


	</body>
</html>	