<?php
require("/includes/connection.php");
?>
<?php 
if (isset($_POST['btn_login'])) {


  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $firstname=ucwords(mysqli_real_escape_string($connection,$_POST['firstname']));
  $lastname=ucwords(mysqli_real_escape_string($connection,$_POST['lastname']));
  // sql statement
  $query="SELECT register_tbl.firstname,register_tbl.lastname FROM register_tbl WHERE firstname='$firstname' AND lastname='$lastname";
    $result=mysqli_query($connection,$query) or die("query failed".mysqli_error($connection));
 }

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEE WELCOME</title>
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
  <div class="col-md-6">
	<h1>COMPANY NAME</h1></div>
  <div class="col-md-6">
  <button name="btn_login" class="btn btn-default" style="float: right;margin-top: 20px; margin-right: 20px;"><a href="employeelogin.php" style="color: black;"> LOGOUT</a></button><br><br></div>
	</div>
</div>
    <div class="container" id="form">
      <div class="row" style="background-color: #001;">
      	<h2 align="center">WELCOME TO THE EMPLOYEE PAGE</h2>
      </div><br>
      <div class="col-md-2 col-lg-2"></div>
      <div class="col-md-8 col-lg-8">
      <center>
        <H3 style="color: white;">WELCOME<?php echo "$firstname $lastname;"?> </H3>
        <H3 style="color: white;">YOUR LOGIN IN IS SUCCESSFULLY!</H3>
           <div class="table">
             <tr>
               <td>DATE</td>
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
               <td>TIME</td>

             </tr>
             <hr style="width:40%;">

             
           </div>

       </center> 

    	<div>
    	<a href="changepassword.php" style="float: right; text-decoration: underline;">Forgot password? Change here</a></div>
    	</div>
    	<div class="col-md-2 col-lg-2"></div>
    </div>

 <div class="container-fliud" id="footer">
 	<div class="row" style="top:200px;">
 		<CENTER><p>&copy COPYRIGHT</p></CENTER>
 	</div>
 </div>


</body>
</html>