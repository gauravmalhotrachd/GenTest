<?php

//CODE Test 2
// INPUT one array for list of FB users
// If U1 is Friend of U2 then opposite of it is also true U2 is friend of U1
// We have to collect unique array from given list of friends and sort the result on zeroth value
// return an array 
// Ran this test and result showed Tested OK.

function compareFriends($frndsList) {
	$outList = array();
	foreach($frndsList as $frnds){
		$temp = explode(",", $frnds);
		if(!in_array($temp[0].",".$temp[1], $outList) && !in_array($temp[1].",".$temp[0], $outList)){
			sort($temp);
			array_push($outList, $temp[0].",".$temp[1]);
		}
	}
	sort($outList);
	return $outList;
}

?>