<?php

require $_SERVER['DOCUMENT_ROOT'] . '/database/Mysqli config DB.php';

  $login = trim($_POST['login']);
  $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
  $name = trim($_POST['name']);
  $pass = trim($_POST['pass']);

  $chek_login = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
  $user_log = $chek_login->fetch_assoc();
  $chek_email = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
  $user_email = $chek_email->fetch_assoc();

  if(mb_strlen($login)<3 || mb_strlen($login)>90) {
    echo "Недопустимая длина логина. От 3 до 90 символов.";
    exit();
  }else if($user_log['login'] == $login){
    echo 'Пользователь с таким логином уже существуетю';
    exit();
  }else if($user_email['email'] == $email){
    echo 'Пользователь с таким email уже существуетю';
    exit();
  }else if(mb_strlen($name)<3 || mb_strlen($name)>50) {
    echo "Недопустимая длина имени";
    exit();
  }else if(mb_strlen($pass)<4 || mb_strlen($pass)>60) {
    echo "Недопустимая длина пароля(от 4 до 60 символов)";
    exit();
  }

  $pass = md5($pass."asdsafaf");

  $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `email`) VALUES('$login', '$pass', '$name', '$email')");

  mail($email, 'Регистрация', 'hi');

  $mysql->close();



  header('Location: /');


 ?>
