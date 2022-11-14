<?php

var_dump($_POST['id']);
if ($_POST['title'] == '') {
    echo 'Введите задание';
    exit();
}

$title = $_POST['title'];
$user_id = $_COOKIE['id'];
$id = $_POST['id'];

require $_SERVER['DOCUMENT_ROOT'] . '/database/pdoConfig.php';

$sql = "UPDATE tasks SET title=:title  WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(['title' => $title, 'id' => $id]);

header("Location: /resources/view/todo/edit.php?id=$id&title=$title");