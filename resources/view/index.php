<?php include $_SERVER['DOCUMENT_ROOT']."/resources/view/template/head template.php"?>

<head>
    <title>Вход</title>
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
          <form action="/app/validation-form/auth.php" method="post">
          <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин"><br>
          <input type="password" name="pass" id="pass" class="form-control" placeholder="Введите пароль"><br>
          <button type="submit" name="button" class="btn btn-success">Войти</button>
          </form>
					<p>Чтобы зареестрироватся нажми <a href="registration.php">здесь</a></p>
        </div>
      </div>
		<?php else: ?>
			<p>Привет <?=$_COOKIE['name']?>. Чтобы выйти нажмите <a href="/app/log out.php">здесь</a>.</p>
		<?php require 'home.php';?>
		<?php endif;?>
  </div>

</body>
</html>
