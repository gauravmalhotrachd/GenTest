<?php 

//CODE Test 1
// INPUT two strings 
// output 1 All characters present in $str1 but not in $str2
// output 2 All characters present in $str2 but not in $str1
// return an array 
// Ran this test and result showed Tested OK.

function processStrings($str1, $str2) {
	$str1arr = str_split($str1);
	$str2arr = str_split($str2);
	$output1 = "";
	foreach($str1arr as $str)
		if(!in_array($str, $str2arr))
			$output1 .= $str;
	$output2 = "";
	foreach($str2arr as $str)
		if(!in_array($str, $str1arr))
			$output2 .= $str;
	return array($output1, $output2);
}

?>