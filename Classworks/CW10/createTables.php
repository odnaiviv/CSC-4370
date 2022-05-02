<!-- used format from skeleton createTables.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CW 10 - Creating Tables</title>
</head>
<body>
	<?php
	session_start();
	$host = "localhost";
	$user = "vdo10";
	$pass = "vdo10";
	$dbname = "vdo10";

	//creating connection
	$conn = new mysqli($host, $user, $pass, $dbname);

	//checking for errors
	if ($conn -> connect_error) {
		echo "Could not connect to server\n";
		//destroying connection
		die ("Connection failed: " . $conn -> connect_error);
	}
	else {
		echo "Connection established\n";
		echo "<br>";
	}


	//creating table for albums
	$sql = "CREATE TABLE albums (artist VARCHAR(20), name VARCHAR(50), genre VARCHAR(20), rdate INT(4))";
	if ($conn -> query($sql) === true) {
		echo "Albums Table has been created!";
		echo "<br>";
	}
	//checking for already existing tables
	else {
		echo "ERROR! Table could not be created: " . $conn -> error;
		echo "<br";
	}

	//creating table for artist
	$sql = "CREATE TABLE artists (aname VARCHAR(50), favsong VARCHAR(50))";
	if ($conn -> query($sql) === true) {
		echo "Artists Table has been created!";
		echo "<br>";
	}
	//checking for already existing tables
	else {
		echo "ERROR! Table could not be created: " . $conn -> error;
		echo "<br";
	}

	//closing connection
	$conn -> close();
	?>
	<div>
		<!-- Fill the below blanks with appropriate files.-->
		<!-- so that you application looks it is redirecting to the required pages -->
		<br>
		<a href="displayTable.php"><input type="button" id="btn1" value="OK"></a>
		<br><br>
		<a href="logout.php"><input type="button" id="btn1" onclick="logout.php" value="Logout"></a>
	</div>
</body>
</html>
