<!-- used format from skeleton displayTables.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CW 10 - Displaying Tables</title>
</head>
<style type="text/css">
	table {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th, td {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
	}
	tr:nth-child(even) {
		background: #a0a0a0;
	}
	tr:nth-child(odd) {
		background: #ffffff;
	}
	tr:nth-child(1) {
		font-weight: bold;
	}
</style>

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
	}


	//compiling results for albums
	$sql = "SELECT artist, name, genre, rdate FROM albums";
	$results = $conn -> query($sql);

	//showing albums table
	echo "<h3>Albums</h3>";
	if ($results -> num_rows > 0) {
		echo "<table><tr><th>Artist</th><th>Name</th><th>Genre</th><th>Release Date</th></tr>";

		// Run a loop and display the records on screen dynamically
		// lets say the above query returned 20 rows
		// Now display the table on screen with 20 records

		while ($row = $results -> fetch_assoc()) {
			echo "<tr><td>" . $row["artist"] . "</td><td>" . $row["name"] . "</td><td>" . $row["genre"] . "</td><td>" . $row["rdate"] . "</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 results";
	}

	//compiling results for artists
	$sql = "SELECT aname, favsong FROM artists";
	$results = $conn -> query($sql);

	//showing artists table
	echo "<h3>Artists</h3>";
	if ($results -> num_rows > 0) {
		echo "<table><tr><th>Artist</th><th>Fav. Song</th></tr>";

		// Now Run a loop and display the data received that we have retrived from DB.

		while ($row = $results -> fetch_assoc()) {
			echo "<tr><td>" . $row["aname"] . "</td><td>" . $row["favsong"] . "</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 results";
	}

	//closing connection
	$conn -> close();
	?>
	<div>
		<!-- Redirect the below link where a page will be displayed to add an artist -->
		<br>
		<a href="add-artist.php"><input type="button" id="btn1" value="Add New Artist"></a>
		<!-- Redirect the below link where a page will be displayed to add a new alubum -->
		<br><br>
		<a href="add-album.php"><input type="button" id="btn1" value="Add New Album"></a>
		<!-- Redirect the below links to login page again as the user clicked logout -->
		<br><br>
		<a href="logout.php"><input type="button" id="btn1" onclick="logout.php" value="Logout"></a>
	</div>
</body>
</html>
