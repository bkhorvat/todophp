<?php
require $_SERVER['DOCUMENT_ROOT'] . '/database/Mysqli config DB.php';

  $email = trim($_POST['email']);
  $pass = trim($_POST['pass']);

  $pass = md5($pass."asdsafaf");

  $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
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
