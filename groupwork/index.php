<?php
	
	session_start();

	$conn = mysqli_connect("localhost", "root", "", "group_kubwa_db");

	if (isset($_POST['submit_btn'])) {

		$Oldpassword = md5($_POST['oldpassword']);
		$Newpassword = md5($_POST['newpassword']);


		if ($Oldpassword == $Newpassword) {

				$sql = "INSERT INTO users(Oldpassword, newpassword) VALUES ('{$oldpassword}', '{$newpassword}')";

				mysqli_query($conn, $sql); 

				$_SESSION['message'] = "You are now logged in";

				
					header("Location:index.php");
		}


		else{

			$error_msg['message'] = "The two passwords do not match";

		}
    }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
                   <!-- header --> 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-color: black; color: white;">
			<h3 style="padding: 30px;">COMPANY NAME</h3>
		</div>
	</div>


	
	               <!-- form -->
	<div class="container" align="center">
		<div class="row" id="box">
		  <div class="myform">
			<div class="col-md-12" style="padding: 0px;">
			<h5 style="background-color: black; color: white; text-align:center; padding: 20px;">EMPLOYEE CHANGE PASSWORD</h5><br><br><br>
			
				<form method="post" action="index.php" style="" >             
                  
                       <input type="password" class="tfield" id="pwd" placeholder="Old password" name="oldpassword"><br><br>           
                       
                       <input type="password" class="tfield" id="pwd" placeholder="New password" name="newpassword"><br><br>

                   <button type="submit" class="btn btn-default" name="submit_btn">Submit</button><br><br>

                
               </form>

            </div>
			</div>
		</div>
	</div>
</div>
                      <!-- footer -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" id="boxi" ">
			
		</div>
	</div>
</div>

</body>
</html>