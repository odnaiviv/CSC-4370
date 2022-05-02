<!-- used format from skeleton addAlbum.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CW 10 - Adding Albums</title>
</head>
<body>
	<div>
		<!-- Add the form tag wit appropriate attributes -->
		<form action="album-db.php" method="post">
			<h3>New Album</h3>
			<p>Artist: <input name="artist" type="text"></p>
			<p>Album Name: <input name="name" type="text"></p>
			<p>Genre: <input name="genre" type="text"></p>
			<p>Released Year: <input name="rdate" type="number" value="2000"></p>
			<input type="submit" id="btn2" name="btn2" value="Submit">
			<!-- Redirect how would you handle user cancel -->
			<a href="displayTable.php"><input type="button" id="btn1" value="Cancel"></a>
		<!-- Close the form tag -->
		</form>
	</div>
</body>
</html>
