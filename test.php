<?php
$host = "localhost";
$user = "vdo10";
$pass = "vdo10";
$dbname = "vdo10";

//creating connection
$conn = new mysqli($host, $user, $pass, $dbname);

//checking connection
if ($conn -> connect_error) {
	echo "Could not connect to server\n";
	die ("Connection failed: " . $conn -> connect_error);
}
else {
	echo "Connection established\n";
}
echo mysql_get_server_info() . "\n";
$conn -> close();
?>
