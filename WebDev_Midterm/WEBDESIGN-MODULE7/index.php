<?php 
session_start();

	include("process.php");
	include("functions.php");

	$user_data = check_login($con);

	include("home.php");


	if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
	else
    $_SESSION['views']=1;
      
	echo"<br> views = ".$_SESSION['views'];
  
?>



