<?php
	session_start();
	if(isset($_SESSION['user']))
	{
		echo 'User ' . $_SESSION['user'] . 'login';
		echo "<a href = 'Logout.php'>Logout</a>";
	}
	else
	{
		header("Location:Login.html");
		exit;
	}
?>
