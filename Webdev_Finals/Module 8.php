<?php
$server = "localhost";
$username = "root";
$password = "";

// Create connection
$connection = new mysqli($server, $username, $password);

// Check connection
if ($connection ->connect_error) {
  die("Connection failed: " . $connection -> mysqli_connect_error());
}
echo "Connected successfully".mysqli_get_host_info($connection);
?>