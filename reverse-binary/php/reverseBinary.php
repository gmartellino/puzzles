<?php
// Reversed Binary Numbers
// Author: Gary Martellino < gary@martellino.me >

class Binary {
	
	public static function reverse($number){

		if(!is_numeric($number)){
			return false; //early exit if invalid input
		}

		return bindec(strrev(decbin($number)));
	}

}

//This does not read from STDIN, but here's a quick ad-hoc simulation
$values = array(13, 2452, 167289, 17528);
foreach($values AS $value){
	echo Binary::reverse($value) . "\n";
}

?>