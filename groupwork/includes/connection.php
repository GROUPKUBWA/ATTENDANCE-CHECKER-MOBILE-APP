<?php
$servername="localhost";
$username="root";
$password="";
$database="group_kubwa_db";
//create connection
$conn=mysqli_connect($servername,$username,$password,$database);
//checkconnection
if (!$conn) {
	die("connection failed:".mysqli_connect_error());
}
//echo "connection successfull";
?>