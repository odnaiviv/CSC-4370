<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

		<!-- added an if/else statement to check fornon-blank forms for ex 4 -->

		<?php
		if (isset($_REQUEST['name']) && ($_REQUEST['name'] != "") && 
			isset($_REQUEST['section']) && ($_REQUEST['section'] != "") && 
			isset($_REQUEST['creditcard']) && ($_REQUEST['creditcard'] != "") && 
			isset($_REQUEST['cctype'])) {
		?>
		
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<!-- putting the submitted contents into suckers.html file for ex 3-->
		<?php
		file_put_contents("suckers.html", $_POST['name'], FILE_APPEND);
        file_put_contents("suckers.html", "; ", FILE_APPEND);
        file_put_contents("suckers.html", $_POST['section'], FILE_APPEND);
        file_put_contents("suckers.html", "; ", FILE_APPEND);
        file_put_contents("suckers.html", $_POST['creditcard'], FILE_APPEND);
        file_put_contents("suckers.html", "; ", FILE_APPEND);
        file_put_contents("suckers.html", $_POST['cctype'], FILE_APPEND);
        file_put_contents("suckers.html", "<br>", FILE_APPEND);
		?>

		<dl>
			<dt>Name</dt>
			<dd>
				<?= $_POST['name'] ?>
			</dd>

			<dt>Section</dt>
			<dd>
				<?= $_POST['section'] ?>
			</dd>

			<dt>Credit Card</dt>
			<dd>
				<?= $_POST['creditcard'] . "(" . $_POST['cctype'] . ")" ?>
			</dd>
		</dl>

		<!-- added the submitted data for ex 3 -->

		<p>Here are all the suckers who have submitted here: </p>

		<pre>
			<?php
			//this works on my xampp server but not on my codd server :(
			$submissions = file_get_contents("suckers.html");
			echo $submissions;
			?>
		</pre>

		<!-- added an error message for ex 4 -->
		<?php
	}
	else {
		?>

		<h1>Sorry</h1>
		<p>You didn't fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
		<?php
	}
		?>
	</body>
</html>
