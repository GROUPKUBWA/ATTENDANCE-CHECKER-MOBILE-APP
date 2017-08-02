<?php
require("/includes/connection.php");
?>
<?php
   if (isset($_GET['btn_login'])) {
    // form variables
   $fname=$_GET['fname'];
  $lname=$_GET['lname'];
  $password=md5($_GET['password']);
  $firstname=ucfirst(mysqli_real_escape_string($connection,$_GET['fname']));
  $lname=ucfirst(mysqli_real_escape_string($connection,$_GET['lname']));

  // sql statements
      $query="SELECT login_tbl.firstname, login_tbl.lastname, login_tbl.password, register_tbl.firstname, register_tbl.lastname,register_tbl.password FROM login_tbl,register_tbl WHERE login_tbl.firstname=register_tbl.firstname, login_tbl.lastname=register_tbl.lastname AND login_tbl.password=register_tbl.password";
      $result=mysqli_query($connection, $query) or die("Queryfailed".mysqli_error($connection));


     $query="INSERT INTO login_tbl(firstname,lastname,password) VALUES('{$fname}','{$lname}','{$password}')";
      // connecting sqli
      $result=mysqli_query($connection, $query) or die("Queryfailed".mysqli_error($connection));

         header("Location:welcome.php");

        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEE LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container-fliud" id="nav">
  <div class="row">
	<h1>COMPANY NAME</h1>
	</div>
</div>
    <div class="container" id="form">
      <div class="row" style="background-color: #001;">
      	<h2 align="center">EMPLOYEE LOGIN</h2>
      </div><br>
      <div class="col-md-2 col-lg-2"></div>
      <div class="col-md-8 col-lg-8">

    	<form action="employeelogin.php" method="GET" name="login_form" onsubmit="return validate()">
    		<input type="text" name="fname" placeholder="First Name" class="form-control"><br><br>
    		<input type="text" name="lname" placeholder="Last Name" class="form-control"><br><br>
    		<input type="password" name="password" placeholder="password" class="form-control"><br><br>
    		<button name="btn_login" class="btn btn-primary" style="float: right;"> LOGIN</button><br><br>
    	</form>
    	<a href="index.php" style="float: right; text-decoration: underline;">Forgot password? Change here</a>
    	</div>
    	<div class="col-md-2 col-lg-2"></div>
    </div>

 
 <div class="container-fliud" id="footer" style="margin-top: 224px;">
 	<div class="row">
 		<CENTER><p>&copy COPYRIGHT</p></CENTER>
 	</div>
 </div>


<!-- script -->
<script>
    function validate(){
    var Fname=document.login_form.fname.value;
    var Lname=document.login_form.lname.value;
    var Pword=document.login_form.password.value;
    if (Fname== "") {
      alert('Please Enter First Name');
      return false;
    }
    if (Lname== "") {
      alert('Please Enter Last Name');
    }
    }
    if (Pword== "") {
      alert('Please Enter your password');
    }
          return true;
     
         

  }
</script>
<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- script -->

</body>
</html>