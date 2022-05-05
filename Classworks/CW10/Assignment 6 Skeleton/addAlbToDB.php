<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Adding Album to DB</title>
</head>

<body>
	<div>
<?php
$servername = "localhost";
$username = "kiran";
$password = "kiran";
$dbname = "kiran";




// Step -1 : Create DB connection
// Step-2 : check if the DB connection is established or not

// Get the data from the "addAlbum" page and assign it to the below variables

// $artist=
// $name=
// $genre=
// $rdate=


// write the sql query in php file to Insert the data into the table

// $sql = 

if ($conn->query($sql) === TRUE) {
    echo "New Album successfully saved";
} else {
    echo "Error: New Album failed to be saved";
}

$conn->close();
?>
	<!-- Redirect the user to show the data -->
	<a href="_______"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>