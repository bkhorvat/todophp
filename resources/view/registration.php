<?php include $_SERVER['DOCUMENT_ROOT']."/resources/view/template/head template.php"?>

<head>
	<title>Форма регистрации</title>
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
