<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="">
	<input class="logout" type="submit" name="logout" value="Exit" />
</form>
</body>
</html>

<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("Location: index.html");
}
if(isset($_POST['logout']))
{
	unset($_SESSION['admin']);
	header("Location: index.html");
}
?>

