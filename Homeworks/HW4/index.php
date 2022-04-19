<!-- nerdieLuv^tm homepage based on https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg04_php_match/img/index.png -->

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

	<!-- main index contents -->
	<div>
		<h2>Welcome!</h2>
		<!-- sign up link -->
		<p>
			<a href="signup.php">
				<img src="images/form.png" alt="sign up icon" height="50" width="50">
				Sign up for a new account
			</a>
		</p>
		<!-- check matches link -->
		<p>
			<a href="matches.php">
				<img src="images/heart.png" alt="matches icon" height="50" width="50">
				Check your matches
			</a>
		</p>
	</div>

	<!-- html common bottom code -->
	<?php include("bot.php"); ?>

</body>
</html>
