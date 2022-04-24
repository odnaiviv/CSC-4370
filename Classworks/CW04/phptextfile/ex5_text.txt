<?php
//function
function countWords($str) {
	//putting words into array
	$countingArray = array_count_values(str_word_count($str, 1));
	//prints array
	print_r($countingArray);
}
//example string to lowercasing
$str = strtolower("To be a string or to not be a string.");
//printing string
echo "String: " . $str;
echo "<br><br>";
//calling function to print word frequency count as an array
echo "[Word] => Occurence # <br>";
echo countWords($str);
?>
