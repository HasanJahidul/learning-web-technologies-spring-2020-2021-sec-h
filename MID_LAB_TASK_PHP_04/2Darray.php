<?php
	$array = [
			[1,2,3,"A"],
			[1,2,"B","C"],
			[1,"D","E","F"]
	];

	$keys = array_keys($array);
	for ($i=0;$i<count($array); $i++)
	{
		foreach($array[$keys[$i]] as $key =>$value )
		{
			if ($value>=1 && $value <=3)
			{
				echo $value." ";
			}
		}
		echo "<br>";
	}

	echo "<br>";

	for ($i=0; $i < count ($array); $i++)
	{
		foreach($array[$keys[$i]] as $key =>$value )
		{
			if ($value>="A" && $value <="F")
			{
				echo $value." ";
			}
		}
		echo "<br>";
	}
	echo "<br>";
?>