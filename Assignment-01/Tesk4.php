<?php

$n=1;
echo Recursion($n);
function Recursion($n){

	if ($n <=5){
		if($n<5){
			echo "$n+";
		}
		else echo "$n=";
    return $n+Recursion($n+1);
	}
}


?>