<?php 
session_start();

	include("process.php");
	include("functions.php");

	$user_data = check_login($con);

	include("html/index.html");
  
?>



