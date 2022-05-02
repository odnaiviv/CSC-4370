<!-- used format from skeleton addArtist.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CW 10 - Adding Artists</title>
</head>
<body>
	<div>
		<!-- Add the form tag wit appropriate attributes -->
		<form action="artist-db.php" method="post">
			<h3>New Artist</h3>
			<p>Artist: <input name="aname" type="text"></p>
			<!-- adding in another column -->
			<p>Favorite Song: <input type="text" name="favsong"></p>
			<input type="submit" id="btn3" name="btn3" value="Submit">
			<!-- Redirect how would you handle user cancel -->
			<a href="displayTable.php"><input type="button" id="btn1" value="Cancel"></a>
		<!-- Close the form tag -->
		</form>
	</div>
</body>
</html>
