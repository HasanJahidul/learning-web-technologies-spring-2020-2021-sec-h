<?php

	for($i=0;$i<=2;$i++){	
		for($j=0;$j<=$i;$j++){
			echo " * ";
		}
		echo  "<br />";
	}
	echo "<br />";
		for($i=0;$i<=2;$i++)
	{ $a=1;
		for($j = 2 - $i;$j >= 0;$j--){
		echo " $a ";
		$a++;
		}
	echo "<br />";
	}
	echo "<br />";

	$char = range('A','F');
	$asci = 65;

	for($i= 0;$i <= 2;$i++){	
		for($j = 0;$j <= $i;$j++){
			$char = chr($asci);
			echo " $char ";
			$asci++;
		}
		echo "<br />";
	}
	echo "<br />";

?>