<!-- viewing matches for returning users based on https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg04_php_match/img/matches.png -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NerdieLuv</title>
	<!-- downloaded stylesheet as a local file -->
	<link rel="stylesheet" href="nerdieluv.css">
</head>

<body>

	<!-- html common top code -->
	<?php include("top.php"); ?>

	<!-- viewing matches contents -->
	<div>
		<form action="matches-submit.php" method="get">
			<fieldset>
				<legend>Returning User: </legend>
				<label for="name">Name: </label>
				<input type="text" name="username" maxlength="16">
				<br>
				<input type="submit" value="View My Matches">
			</fieldset>
		</form>
	</div>

	<!-- html common bottom code -->
	<?php include("bot.php"); ?>

</body>
</html>
