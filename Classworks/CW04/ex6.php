<?php
//function
function remove_all($str, $char) {
	//initializing variables
	$len = strlen($str);
	$newStr = "";

	//loop to go through every character
	for ($i = 0; $i < $len; $i++) {
		if ($str[$i] != $char) {
			$newStr = $newStr.$str[$i];
		}
	}
	return $newStr;
}
//example string
$str = "Summer is here!";
//removing e character
$char = "e";
//printing original string
echo "Original: ". $str;
echo "<br><br>";
//calling function to print new string
echo "New: " . remove_all($str, $char);
?>
