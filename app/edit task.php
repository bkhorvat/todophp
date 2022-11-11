<?php

if ($_POST['title'] == '') {
    echo 'Введите задание';
    exit();
}
if ($_POST['dateStart'] == '') {
    echo 'Введите дату начала';
    exit();
}
if($_POST['timeStart'] == ''){
    echo 'Введите времья начала';
    exit();
}
if ($_POST['dateEnd'] == '') {
    echo 'Введите дату конца';
    exit();
}
if($_POST['timeEnd'] == ''){
    echo 'Введите времья конца';
    exit();
}

$title = $_POST['title'];
$description = $_POST['description'];
$user_id = $_COOKIE['id'];
$id = $_POST['id'];

require $_SERVER['DOCUMENT_ROOT'] . '/database/PDO config DB.php';

$sql = "UPDATE tasks SET title=:title, description=:description, dateStart=:dateStart, dateEnd=:dateEnd WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(['title' => $title, 'description' => $description, 'dateStart' => $dateStart, 'dateEnd' => $dateEnd, 'id' => $id]);

header("Location: /resources/view/edit%20task.php?id=$id");