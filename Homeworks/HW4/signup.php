<!-- signup form for new users based on https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg04_php_match/signup-elaine-benes.png -->

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

	<!-- sign up form contents -->
	<div>
		<form action="signup-submit.php" method="get">
			<fieldset>
				<legend>New User Signup: </legend>
				<ul>

					<!-- user's name -->
					<li><b>Name: </b>
						<input type="text" name="username" maxlength="16">
					</li>

					<!-- user's gender -->
					<li><b>Gender: </b>
						<label><input type="radio" name="gender" value="m">Male</label>
						<label><input type="radio" name="gender" value="f">Female</label>
					</li>

					<!-- user's age -->
					<li><b>Age: </b>
						<input type="text" name="age" size="6" maxlength="2">
					</li>

					<!-- user's personality type/mbti -->
					<li><b>Personality Type: </b>
						<input type="text" name="mbti" size="6" maxlength="4">
						<a href="https://en.wikipedia.org/wiki/Myers%E2%80%93Briggs_Type_Indicator#/media/File:MyersBriggsTypes.png">(Don't know your type?)</a>
					</li>

					<!-- user's favorite operating system -->
					<li><b>Favorite OS: </b>
						<select name="os">
							<option value="windows" selected>Windows</option>
							<option value="macos">Mac OS</option>
							<option value="linux">Linux</option>
						</select>
					</li>

					<!-- user's seeking age range -->
					<li><b>Seeking Age: </b>
						<input type="text" name="min" size="6" maxlength="2" placeholder="min"> to 
						<input type="text" name="max" size="6" maxlength="2" placeholder="max">
					</li>
				</ul>

				<!-- signup button once user has finished filling out form -->
				<input type="submit" value="Sign Up">
				
			</fieldset>
		</form>
	</div>

	<!-- html common bottom code -->
	<?php include("bot.php"); ?>

</body>
</html>
