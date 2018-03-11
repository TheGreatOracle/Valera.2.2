<?php 
include('db_connect.php');


	if(isset($_POST['login'])) {

		$login = $_POST['login'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$email = $_POST['email'];

		if ($password === $repassword) {

			$password = sha1($password);
			$sql = "INSERT INTO users VALUES (NULL,'$login','$password','$email')"; 
			$result = $pdo->query($sql);

		}
		else {

			echo 'ТЫ НЕ ВАЛЕРА ПШЛ ВОН';

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
	<title>Регистрация</title>
</head>
<body>
	<div class="op">
	<h1>Регистрция</h1>
	<form action="register.php" method="post">
		<input type="text" name="login" placeholder="Логин"><br>
		<input type="password" name="password" placeholder="Пароль"><br>
		<input type="password" name="repassword" placeholder="Повторить пароль"><br>
		<input type="text" name="email" placeholder="email"><br>
		<input type="submit">
	</form>
	</div>
	<style>
		.op {
		position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) 
		}
	</style>
</body>
</html>
