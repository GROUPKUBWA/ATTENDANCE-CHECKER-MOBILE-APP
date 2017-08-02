<?php
  $servername="localhost";
  $username="root";
  $password="";
  $database="group_kubwa_db";
  // create connection
  $connection=mysqli_connect($servername,$username,$password,$database);
  
  //check connection
  if (!$connection) {
   	die("coonectin failed:".mysqli_connect_eror());
   } 
   // echo "Connected successfully";

  ?>