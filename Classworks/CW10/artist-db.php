<!-- used format from skeleton addArtToDB.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CW 10 - Adding Artists to Database</title>
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


	// Read the data that the user enetred in the input text field artist1 and assign it to varibale below.
	if (isset($_POST['btn3'])) {
		$aname = $_POST['aname'];
		$favsong = $_POST['favsong'];

		// Now understand the table structure and write a sql query to insert the artist name into the table
		$sql = "INSERT INTO artists (aname, favsong) VALUES ('$aname', '$favsong')";
		if ($conn -> query($sql) === true) {
			echo "New Artist successfully saved!";
			echo "<br>";
		}
		else {
			echo "ERROR! New Artist could not be saved: " . $conn -> error;
			echo "<br>";
		}
	}

	//closing connection
	$conn -> close();
	?>

	<!-- Redirect the user to show the data -->
	<br>
	<a href="displayTable.php"><input type="button" id="btn1" value="OK"></a>
</body>
</html>
