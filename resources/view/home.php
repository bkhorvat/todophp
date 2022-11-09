<?php include $_SERVER['DOCUMENT_ROOT']."/resources/view/template/head template.php"?>

<head>
    <title>Домашняя страница</title>
</head>

<body>
	<div class="container">
		<h1>Список дел</h1>
		<form action="/app/add task.php" method="post">
			<input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
			<button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
		</form>

		<?php
			require $_SERVER['DOCUMENT_ROOT'] . '/database/PDO config DB.php';

			$user_id = $_COOKIE['id'];

			echo '<ul>';
			$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id`DESC');
			while($row = $query->fetch(PDO::FETCH_OBJ)) {
				if($row->user_id == $user_id){
					echo '<li><b>'.$row->task.'</b><a href="/app/delete task.php?id='.$row->id.'"<button>Delete</button></a></li>';
				}	
			}
			echo '</ul>';

		 ?>

	</div>
</body>
</html>
