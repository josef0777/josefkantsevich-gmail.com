<?php
if(isset($_POST['submit']))
{
    $login = "admin";
    $pass = "login";
	if($_POST['user'] == $login && $_POST['pass'] == $pass)
	{
		session_start();
		$_SESSION['admin'] = 'admin';
		header("Location: page.php");
		exit();
	}else{
		header("Location: index.html");
		echo 'You enter incorrect login or password!';
	}
}
