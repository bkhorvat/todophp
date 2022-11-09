<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Форма регистрации</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body>

  <div class="container mt-4">

		<?php
			if(!array_key_exists('id', $_COOKIE)):
		 ?>

      <div class="row">
        <div class="col">
        </div>
        <div class="col">
          <h1>Форма регистрации</h1>
          <form action="../../app/validation-form/check%20registration%20form.php" method="post">
          <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин"><br>
          <input type="email" name="email" id="email" class="form-control" placeholder="Введите email"><br>
          <input type="text" name="name" id="name" class="form-control" placeholder="Введите имя"><br>
          <input type="password" name="pass" id="pass" class="form-control" placeholder="Введите пароль"><br>
          <button type="submit" name="button" class="btn btn-success">Зарегистрировать</button>
          </form>
        </div>
      </div>
		<?php else: header('Location: /');?>
		<?php endif;?>
  </div>

</body>
</html>
