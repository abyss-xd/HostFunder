<?php 

require "/tempconfig.php";

$servername = $hostname;
$username = $db_user;
$password = $db_user_pass;
$dbname = $db_name;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
