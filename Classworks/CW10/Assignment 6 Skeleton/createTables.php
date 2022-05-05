<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Assignment Demo</title>
</head>

<body>
You have successfully logged in
<?php

$servername = "localhost";
$username = "kiran";
$password = "kiran";
$dbname = "kiran";

// The above used four variables servername,username,password and dbname 
// are according to my environment setting.

// Now your task would be to check 
// what your values would be accoring to your environment and change the values of above mentioned variables

// Note : This is the most crucial step for you DB connection. Please double check and change the values.

// Create connection

// create a variable conn and use it to establish the connection to the DB
// $conn =

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE albums (artist VARCHAR(20), name VARCHAR(50), genre VARCHAR(20), rdate INT(4))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
// Hnadle this condition
}

$sql = "CREATE TABLE artists (name VARCHAR(50))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
// Handle this condition
}

$conn->close();
?>  

	<div>
		<!-- Fill the below blanks with appropriate files.-->
		<!-- so that you application looks it is redirecting to the required pages   -->
		<a href="_________"><input type="button" id="btn1"  value="OK"></a>
		<a href="_________"><input type="button" id="btn1" onclick="addA.php" value="Logout"></a>
	</div>
</body>

</html>