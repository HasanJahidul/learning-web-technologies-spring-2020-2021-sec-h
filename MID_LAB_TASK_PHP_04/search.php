<?php
	$sName ='abc';

	$students = [
					['id'=>1, 'name'=>'abc', 'cgpa'=>2.3, 'email'=>'abc@aiub.edu'],
					['id'=>2, 'name'=>'xyz', 'cgpa'=>2.3, 'email'=>'xyz@aiub.edu'],
					['id'=>3, 'name'=>'pqr', 'cgpa'=>2.3, 'email'=>'pqr@aiub.edu']
				];


			for ($i=0;$i< count ($students);$i++)
			{
				if ($students[$i]['name'] == $sName)
				{
					echo $sName." Found ";
					break;
				}
				else
				{
					echo $sName. " Not found ";
					break;
				}
		}
?>