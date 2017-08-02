<?php 

	session_start();

	$db = mysqli_connect("Localhost", "root", "", "group_kubwa_db");

		if (isset($_POST['login_btn'])) 

			{
			
				# code...
					$username = mysql_real_escape_string($_POST['username']);

					$password = mysql_real_escape_string($_POST['password']);

						$password = md5($password);

							$sql = "SELECT * FROM admin_tbl WHERE username='$username' AND password='$password' ";

								$result = mysqli_query($db, $sql);

									if (mysqli_num_rows($result) == 1) 

										{
											
											# code...
												$_SESSION['message'] = "You are logged in";

												$_SESSION['username'] = $username;

													header("Location:adminwelcome.php");
									}

									else{

											$_SESSION['message'] = "Username/password combination incorrect";

										}
			}


?>






<!DOCTYPE html>
<html>
<head>
	<title> ADMIN LOGIN </title>

	<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<div class="container-fluid" id="header">
	
	<div class="container">
		
		<div class="row">

			<div class="col-md-12">
			
				<h1 style="color: white;"><a href="#" style="text-decoration: none; color: white;"> COMPANY NAME </a></h1>

			</div>

		</div>

	</div>

</div>





<div class="container" id="logs">
	
	<div class="row">
		
		<div class="col-md-12" id="topped">
			
			<div class="col-md-3"></div>

			<div class="col-md-6">
				
				<div class="col-md-12" id="ad">
					
					<h2 align="center" id="tag"> ADMIN LOGIN</h2>

				</div>



				<div class="col-md-12" align="center" id="adlog">

					<script>
						
						function validate($login_form) 

							{
							
							// body...
								var username = document.login_form.username.value;

									if (username == "") 
										
										{
											alert('Please Enter Username');

												return false
										}

								var password = document.login_form.password.value;

									if (password == "") 

										{
											alert('Please Enter Password');

												return false
										}
							}

					</script>
					
						<form method="post" action="adlogin.php" name="login_form" onsubmit="return validate()">
						<?php

								if (isset($_SESSION['message'])) 
									{
										# code...
											echo '<div class="alert alert-danger">'.$_SESSION['message'].'</div>';

											unset($_SESSION['message']);
									}


                              ?>

								<input type="text" name="username" class="textInput form-control" placeholder="Username"> <br>

								<input type="password" name="password" class="textInput form-control" placeholder="Password"> <br>

								<input type="submit" name="login_btn" value="Login" class="btn btn-success" style="float: right;">

						</form>

				</div>

			</div>

			<div class="col-md-3"></div>

		</div>

	</div>

</div>

<footer>

<div class="container-fluid" id="isi">
	
	<div class="col-md-12" id="footer">
		
		<p> Copyright </p>

	</div>

</div>

</footer>

<body>

</body>
</html>