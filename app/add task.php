<?php
  $title = $_POST['title'];
  $description = $_POST['description'];
  $dateStart = $_POST['dateStart'].' '.$_POST['timeStart'];
  $dateEnd = $_POST['dateEnd'].' '.$_POST['timeEnd'];
  $user_id = $_COOKIE['id'];

  if($title == ''){
    echo 'Введите задание';
    exit();
  }

  require $_SERVER['DOCUMENT_ROOT'] . '/database/PDO config DB.php';

  $sql = 'INSERT INTO tasks(title, description, dateStart, dateEnd, user_id) VALUES(:title, :description, :dateStart, :dateEnd, :user_id)';
  $query = $pdo->prepare($sql);
  $query->execute(['title' => $title, 'description' => $description, 'dateStart' => $dateStart, 'dateEnd' => $dateEnd, 'user_id' => $user_id]);

  header('Location: /');
 ?>
