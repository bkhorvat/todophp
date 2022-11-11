<?php
  require $_SERVER['DOCUMENT_ROOT'] . '/database/PDO config DB.php';

  $id = $_GET['id'];

  $sql = 'DELETE FROM `tasks` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

header('Location: /');
