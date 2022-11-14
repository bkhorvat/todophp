<?php

if ($_POST['title'] == '') {
    echo 'Введите задание';
    exit();
}

$title = $_POST['title'];
$user_id = $_COOKIE['id'];

require $_SERVER['DOCUMENT_ROOT'] . '/database/pdoConfig.php';

$sql = 'INSERT INTO tasks(title, user_id) VALUES(:title, :user_id)';
$query = $pdo->prepare($sql);
$query->execute(['title' => $title, 'user_id' => $user_id]);

header('Location: /');
?>
