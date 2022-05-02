<!-- used format from skeleton addAlbToDB.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CW 10 - Adding Albums to Database</title>
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


	// Get the data from the "addAlbum" page and assign it to the below variables
	if (isset($_POST['btn2'])) {
		$artist = $_POST['artist'];
		$name = $_POST['name'];
		$genre = $_POST['genre'];
		$rdate = $_POST['rdate'];

		// write the sql query in php file to Insert the data into the table
		$sql = "INSERT INTO albums(artist, name, genre, rdate) VALUES ('$artist', '$name', '$genre', '$rdate')";
		if ($conn -> query($sql) === true) {
			echo "New Album successfully saved!";
			echo "<br>";
		}
		//checking for already existing ablums
		else {
			echo "ERROR! New Album could not be saved: " . $conn -> error;
			echo "<br>";
		}
	}

	//closing connection
	$conn -> close();
	?>

	<!-- Redirect the below link. Once the user clicks the on ok show the user all the artist and albums -->
	<br>
	<a href="displayTable.php"><input type="button" id="btn1" value="OK"></a>
</body>
</html>
