<?php
//month array
$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");


// 1) for loop to print months in order
echo "<h4>Printing Months in Order: </h4>";
for ($i = 0; $i < count($month); $i++) {
	echo $month[$i] . " | ";
}


// 2) function to sort and print months
function sort_alpha($month) {
	sort($month);
	for ($i = 0; $i < count($month); $i++) { 
		echo $month[$i] . " | ";
	}
	echo "<br>";
}
//calling function
echo "<h4>Printing Months Alphabetically: </h4>";
echo sort_alpha($month);


// 3) using foreach for 1 and 2
echo "<h4>Using foreach to Print Months in Order: </h4>";
foreach ($month as $value) {
	echo "$value | ";
}
//function to sort alphabetically
function alpha_two($month) {
	sort($month);
	foreach ($month as $value) {
		echo "$value | ";
	}
}
//calling function
echo "<h4>Using foreach to Print Months Alphabetically: </h4>";
echo alpha_two($month);
?>
