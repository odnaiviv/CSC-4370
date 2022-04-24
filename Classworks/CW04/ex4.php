<?php
//function
function word_count($str) {
	//initializing variables
	$spaces = 0;
	$words = 1;
	$include = $spaces;
	$count = 0;

	//iterating through every character in string until last one
	for ($i = 0; $i < strlen($str); $i++) {
		//omitting spaces in string
		if ($str[$i] == " " || $str[$i] == "\n" || $str[$i] == "\t") {
			$include = $spaces;
		}
		else if ($include == $spaces) {
			$include = $words;
			//increments to next character
			$count++;
		}
	}
	return $count;
}
//example string
$str = "hello, how are you?";
//printing string
echo "String: " . $str;
echo "<br><br>";
//calling function to print word count
echo "Word Count: " . word_count($str);
?>
