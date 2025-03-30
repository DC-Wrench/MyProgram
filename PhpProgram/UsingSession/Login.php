<?php
	session_start();
	if($_POST)
	{
		$user = isset($_POST['user']) ? trim($_POST['user']) : '';
		$pwd = isset($_POST['pwd']) ? trim($_POST['pwd']) : '';
		$data = ['user' => 'Tom','pwd' => 123456];
		if(($user == $data['user']) && ($pwd == $data['pwd']))
		{
			$_SESSION['user'] = $data['user'];
			header('Location:Index.php');
			exit;
		}
		else
		{
			echo 'The username or password is incorrect,pleace try again';
		}
	}
	require './Login.html';
?>
