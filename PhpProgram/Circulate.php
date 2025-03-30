<?php
	for($i=1; $i<=7; $i++)
	{
		if($i<4)
		{
			for($j=3; $j>=$i; $j--)
			{
				echo"&ensp;";
			}
			for($l=1; $l<=($i+($i-1)); $l++)
			{
				echo "*";
			}
			echo "<br>";
		}
		else if($i==4)
		{
			for($k=1; $k<=($i+($i-1)); $k++)
			{
				echo "*";
			}
			echo "<br>";
		}
		else
		{
			for($m=4; $m<$i; $m++)
			{
				echo "&ensp;";
			}
			
			for($n=1; $n<=2*(7-$i)+1; $n++)
			{
				echo "*";
			}
			echo "<br>";
		}
	}
?>
