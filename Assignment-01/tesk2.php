<?php  
    $sum=0;
	for ($i=1; $i<5; $i++) {
		if($i<4){
			echo "$i+";
		}
		else echo "$i=";
	 $sum=$sum+$i;
	 }
    echo $sum;
?>