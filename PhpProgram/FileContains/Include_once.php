<?php
	for($i = 1; $i <= 5; $i++)
	{
		include_once "./Once.php";
	}
	echo "The number of times the external file was referenced\n
		using the include_once statement:" . $sum;
	echo "<br>";
	for($i = 1; $i <= 5; $i++)
	{
		include "./Once.php";
	}
	echo "The number of times the external file was referenced\n
		using the include statement:" . $sum;
?>
