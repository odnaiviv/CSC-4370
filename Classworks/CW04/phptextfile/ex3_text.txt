<?php
//triangle function
function triangle($num) {
	//nested for loops
	for ($i = 0; $i < $num; $i++) {
		for ($j = 0; $j <= $i; $j++) {
			echo "*";
		}
		echo "<br>";
	}
}
//assigning example number to test triangle function
$num = 5;
//calling function
triangle($num);
?>
