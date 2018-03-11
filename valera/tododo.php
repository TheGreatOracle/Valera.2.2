<?php
session_start();
if ($_SESSION['login'] === true){
  include('db_connect.php');

  $sql = "SELECT * FROM tasks";
  $check = $pdo->query($sql);
  $check = $check->fetchAll();
  //var_dump($check);
} 
else{
	header("Location: http://valera/login.php");
}
 ?>

<!DOCTYPE HTML>
<html>
 <head>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>Таблица размеров обуви</title>
 </head>
 <body>
  <style>
    .btn{
      width: 40px;
      height: 40px;
      border-color: transparent;
      border-radius: 5px;
      background-color: #d35400;
      outline: none;
      color: #d35400;
  </style>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Задача</th>
      <th scope="col">Описание</th>
      <th scope="col">Когда</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
      foreach ($check as $task) {
        echo "
        <tr>
          <th scope='row'>".$task['id']."</th>
          <td>".$task['Задача']."</td>
          <td>".$task['Описание']."</td>
          <td>".$task['Когда']."</td>
        </tr>
        ";
      }

     ?>
  </tbody>
</table>
 </body>
</html>