<?php
include('db_connect.php');

session_start();
if ($_SESSION['login'] === true){
	
} 
else{
	header("Location: http://valera/login.php");
}

if(isset($_POST['title'])) {

	$title = $_POST['title'];
	$content = $_POST['content'];
	$date = $_POST['date'];

	$sql = "INSERT INTO tasks VALUES (NULL, '$title', '$content', '$date')";
	$result = $pdo->query($sql);
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
</head>
<body>
	<style>
		.create-task{
			margin-top: 30px;
		}

		.input-task{
			margin-top: 10px;
			width: 100%;
			height: 40px;
			border-radius: 5px;

		}
		
		.submit-task{
			margin-top: 10px;
			width: 100%;
			height: 40px;
			border-color: transparent;
			border-radius: 5px;
			background-color: #2ecc71;
			outline: none;
			color: #fff;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h3>Сделай что-нибудь крутое!</h3>
				<div class="create-task">
				<form action="create.php" method="post">
					<input class="input-task" type="text" name="title" placeholder="Задача"><br>
					<input class="input-task" type="text" name="content" placeholder="Описание"><br>
					<input class="input-task" type="text" name="date" placeholder="Когда"><br>
					<input class="submit-task" type="submit" value="Погнали!">
				</form>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>