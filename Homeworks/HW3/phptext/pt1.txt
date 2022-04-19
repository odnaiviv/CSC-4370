<?php
//function
function isBitten($mylunch) {
	//checking if mylunch = 1; charlie will eat
	if ($mylunch == 1) {
		echo "Charlie ate my lunch! >:(";
	}
	//checking if mylunch = 0; charlie will not eat
	else if ($mylunch == 0) {
		echo "Charlie did not eat my lunch! :D";
	}
	//in case there's a problem with the code
	else {
		echo "ERROR!";
	}
}
//random variable for 50/50 probability
$mylunch = rand(0, 1);
//calling function
echo isBitten($mylunch);
//refreshing page to test results
echo "<br><br>Refresh the page to see if Charlie ate my lunch again or not.";
?>
