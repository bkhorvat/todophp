<?php
require $_SERVER['DOCUMENT_ROOT'].'/db/regist.php';

  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

  $pass = md5($pass."asdsafaf");

  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
  $user = $result->fetch_assoc();

  if($user == 0) {
  echo "Такой пользователь не найден.";
  exit();
}

setcookie('id', $user['id'], time() + 3600, "/");
setcookie('name', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: /');
 ?>
