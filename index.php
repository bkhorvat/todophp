<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Форма регистрации</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/registration.css">
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
          <h1>Форма авторизации</h1>
          <form action="validation-form/auth.php" method="post">
          <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин"><br>
          <input type="password" name="pass" id="pass" class="form-control" placeholder="Введите пароль"><br>
          <button type="submit" name="button" class="btn btn-success">Войти</button>
          </form>
					<p>Чтобы зареестрироватся нажми <a href="regist.php">здесь</a></p>
        </div>
      </div>
		<?php else: ?>
			<p>Привет <?=$_COOKIE['name']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a>.</p>
		<?php require 'index2.php';?>
		<?php endif;?>
  </div>

</body>
</html>
