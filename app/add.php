<?php
  $task = $_POST['task'];
  $user_id = $_COOKIE['id'];

  if($task == ''){
    echo 'Введите задание';
    exit();
  }

  require 'db/configDB.php';

  $sql = 'INSERT INTO tasks(task, user_id) VALUES(:task, :user_id)';
  $query = $pdo->prepare($sql);
  $query->execute(['task' => $task, 'user_id' => $user_id]);

  header('Location: /');
 ?>
