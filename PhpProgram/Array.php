<?php
	$num01 = array(1,2,3,4,5);
	$num02 = [6,7,8,9,10];
	$num01[5] = 123;
	echo $num01;
	print_r($num01);
	var_dump($num02);
	unset($num01[0]);
	foreach($num02 as $key => $value)
	{
		echo $key . "-" . $value;
	}
?>
