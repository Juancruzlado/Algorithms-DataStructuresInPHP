<?php 

function linearSearch($array, $element){
	$arrayE = count($array);

	for($i = 0; $i < $arrayE; $i++){
		if($array[$i] == $element){
			echo "We found it in $i index";
			return;
		}
	}
	echo "false not in here";
}

$a = [0,1,2,4,5,7,9,11,42,567];
$e = 567;

linearSearch($a, $e);
