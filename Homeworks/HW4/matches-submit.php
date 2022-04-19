<!-- viewing matches for returning users based on https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg04_php_match/matches-submit-bjarne-stroustroup.png -->

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
		<h2>
			Matches for <?= $_GET['username'] ?>
		</h2>
		<div class="match">
			<?php printmatches(); ?>
		</div>
	</div>

	<!-- html common bottom code -->
	<?php include("bot.php"); ?>

</body>
</html>

<?php
//function to find matches in the singles.txt file
function printmatches() {
	$user = "";
	//finding user info
	foreach (file("singles.txt", FILE_IGNORE_NEW_LINES) as $user) {
		if ($_GET['username'] == explode(",", $user)[0]) {
			break;
		}
	}
	//matching conditions
	foreach (file("singles.txt", FILE_IGNORE_NEW_LINES) as $usermatch) {
		if (
			//user does not match with themselves
			explode(",", $usermatch)[0] != explode(",", $user)[0] &&
			//user matched by opposite gender
			explode(",", $usermatch)[1] != explode(",", $user)[1] &&
			//user matched by someone in their age range
			explode(",", $usermatch)[2] >= explode(",", $user)[5] &&
			explode(",", $usermatch)[2] <= explode(",", $user)[6] &&
			//user matched by operating systems
			explode(",", $usermatch)[4] == explode(",", $user)[4] && (
			//user matched by personality types
		str_split(explode(",", $usermatch)[3])[0] == str_split(explode(",", $user)[3])[0] || 
		str_split(explode(",", $usermatch)[3])[1] == str_split(explode(",", $user)[3])[1] ||
		str_split(explode(",", $usermatch)[3])[2] == str_split(explode(",", $user)[3])[2] ||
		str_split(explode(",", $usermatch)[3])[3] == str_split(explode(",", $user)[3])[3]
			)
		) {
?>
<!-- printing matches -->
<p>
	<img src="images/user.jpg" alt="user icon">
	<?= explode(",", $usermatch)[0] ?>
</p>
<ul>
	<li><b>Gender: </b><?= explode(",", $usermatch)[1] ?></li>
	<li><b>Age: </b><?= explode(",", $usermatch)[2] ?></li>
	<li><b>Type: </b><?= explode(",", $usermatch)[3] ?></li>
	<li><b>OS: </b><?= explode(",", $usermatch)[4] ?></li>
</ul>
<?php
		}
	}
}
?>
