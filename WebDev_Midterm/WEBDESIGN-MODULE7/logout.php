<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

$views = $_SESSION['views'];

unset($_SESSION['views']);
session_destroy();


header("Location: login.php");
die;

?>