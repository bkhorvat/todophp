<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Список дел</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="app/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body>

	<div class="container">
		<h1>Список дел</h1>
		<form action="add.php" method="post">
			<input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
			<button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
		</form>

		<?php
			require 'db/configDB.php';

			$user_id = $_COOKIE['id'];

			echo '<ul>';
			$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id`DESC');
			while($row = $query->fetch(PDO::FETCH_OBJ)) {
				if($row->user_id == $user_id){
					echo '<li><b>'.$row->task.'</b><a href="delete.php?id='.$row->id.'"<button>Delete</button></a></li>';
				}	
			}
			echo '</ul>';

		 ?>

	</div>
</body>
</html>
