<?php 
session_start();
	include('db_connect.php');
	if(isset($_POST['login'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM users WHERE login = '$login'";
		$check = $pdo->query($sql);
		$check = $check->fetch();

			if ($check['password'] == sha1($password)){
		 		$_SESSION['login'] = true;
		 		header("Location: http://valera/tododo.php");
		 	}

		 	else {
		 		echo "Логин или пароль введен неверно";
			}
	}
 ?>


<!DOCTYPE html>
<html lang="eng">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
	<meta charset="utf-8">
	<title>Авторизация</title>
</head>
<body>
	<div class="op">
	<h1>Авторизация</h1>
	<form action="login.php" method="post">
	<input type="text" name="login" placeholder="Логин"><br>
	<input type="password" name="password" placeholder="Пароль"><br>
	<input type="submit">
	</form>
	</div>
	<style>
		.op {
		position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) ;
		}
	</style>
</body>
</html>