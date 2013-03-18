<?php
// Beautiful Strings: Facebook Hacker Cup 2013 - Problem 1
// Author: Gary Martellino < gary@martellino.me >

function beautify_string($string){
  $score = 0;
	$string = strtolower($string);
	$counts = array();
	
	//count occurences of string values if between a-z
	for($i = 0; $i < strlen($string); $i++){
		if(preg_match("/^[a-z]$/", $string[$i])){
			if(!array_key_exists($string[$i], $counts)){
				$counts[$string[$i]] = 1;
			}else{
				$counts[$string[$i]]++;
			}
		}
	}
	
	//sort occurences by appearance
	arsort($counts);
	
	//calculate score
	$beauty = 26;
	$score = 0;
	
	foreach($counts AS $key => $value) {
		$score += $beauty * $value;
		$beauty--;
	}
	
	return($score);
	
}

//execute program (cat ../puzzle_input.txt | php beautiful_strings.php)
$input = file('php://stdin');
$num_cases = $input[0];
for($i = 1; $i < $num_cases + 1; $i++){
	echo "Case #$i: ".beautify_string($input[$i])."\n";
}

?>