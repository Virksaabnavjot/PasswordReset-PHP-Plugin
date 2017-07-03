<?php
$host = "localhost";
$username = "navsingh_rp";
$password = "Mtkh6767";
$dbname = "navsingh_rp";

// Create connection
//$conn = mysqli_connect($host, $username, $password, $dbname);
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Sorry, Connection failed: " . mysqli_connect_error());
}
echo "Connected to the Database successfully.</br>";
?>
