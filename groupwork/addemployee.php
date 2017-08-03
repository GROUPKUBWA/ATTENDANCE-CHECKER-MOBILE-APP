<?php
include ('includes/connection.php');
?>
<?php
if (isset($_POST['register_btn'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pword=$_POST['password'];
	$tel_no=$_POST['tel_no'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$fname= ucfirst(mysqli_real_escape_string($conn,$_POST['fname']));
	$lname= ucfirst(mysqli_real_escape_string($conn,$_POST['lname']));
	$password = md5($_POST['password']);
	$query="INSERT INTO register_tbl(firstname,lastname,password,tel_no,email,date)VALUES('{$fname}','{$lname}','{$pword}','{$tel_no}','{$email}','{$date}')";
	$result=mysqli_query($conn,$query);
	header("Location:addemployee.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD EMPLOYEE</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row" style="background-color: #000;color: #fff; margin-bottom: 30px;">
		<div class="col-md-12">
			<h1>COMPANY NAME</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" col-xs-12>
				<form action="addemployee.php" method="POST" name="add_form" onsubmit="return validate()">
					<center><legend>ADD EMPLOYEE</legend></center><br>
					<input type="text" class="form-control" name="fname" placeholder="First Name"><br>
					<input type="text" class="form-control" name="lname" placeholder="Last Name"><br>
					<input type="password" class="form-control" name="password" placeholder="Password"><br>
					<input type="number" class="form-control" name="tel_no" placeholder="Telephone Number"><br>
					<input type="text" class="form-control" name="email" placeholder="Email"><br>
					<input type="date" class="form-control" name="date" placeholder="Date"><br>
					<input type="submit" class="btn btn-primary pull-right" name="register_btn" placeholder="login">
				</form>
				<script>
					function validate(){
						var Fname=document.add_form.fname.value;
						var Lname=document.add_form.lname.value;
						var Pword=document.add_form.password.value;
						var Tnumber=document.add_form.tel_no.value;
						var Email=document.add_form.email.value;
						var date=document.add_form.date.value;
							if (Fname== "") {
								alert('please enter firstname');
								return false;
							}
		
							if (Lname== "") {
								alert('please enter lastname');
								return false;
							}
							if (Pword== "") {
								alert('please enter password');
								return false;
							}
							if (Tnumber== "") {
								alert('please enter your telephone number');
								return false;
							}
							if (Email== "") {
								alert('please enter your Email');
								return false;
							}
							if (date== "") {
								alert('please enter the date today');
								return false;
							}
								return true;
					}
				</script>
				<table class="table">
					<thead>
						<tr>
							<th>Id </th>
							<th>First Name </th>
							<th>Last Name </th>
							<th>Telephone Number </th>
							<th>Email </th>
							<th>Date Employed </th>
							<th>action </th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query="SELECT *FROM register_tbl";
						$result = mysqli_query($conn,$query);
						while($row=mysqli_fetch_array($result)){
							echo '
        				    <tr>
        				        <td>'.$row['employee_id'].'</td>
        				        <td>'.$row['firstname'].'</td>
        				        <td>'.$row['lastname'].'</td>
        				        <td>'.$row['tel_no'].'</td>
        				        <td>'.$row['email'].'</td>
        				        <td>'.$row['date'].'</td>
        				        <td><button class="btn btn-danger"><a href="addemployee.php?deleteid='.$row['employee_id'].'"onclick="return confirm(\'ARE YOU SURE YOU WANT TO DELETE!\')">DELETE</button></a></td>
        				        <td><button class="btn btn-success"><a href="addemployee.php?editid='.$row['employee_id'].'"onclick="return confirm(\'ARE YOU SURE!\')">EDIT</a></button></td>
        				    </tr>';
							
						}
						?>
		<?php
		if (isset($_GET['deleteid'])) {
			$employee_id=$_GET['deleteid'];
			$query="DELETE FROM register_tbl WHERE employee_id='$employee_id'";
			$result=mysqli_query($conn,$query);
			header("Location:addemployee.php");
		}
		?>
	</tbody>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
</div>

<!-- scripts -->
<link rel="stylesheet" type="text/css" href="js/jquery-3.2.1.slim.min.js">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
</body>
</html>