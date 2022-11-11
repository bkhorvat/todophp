<?php

$title = $_POST['title'];
$description = $_POST['description'];
$user_id = $_COOKIE['id'];
$id = $_POST['id'];



if ($_POST['dateStart']) {
    $dateStart = $_POST['dateStart'].' '.$_POST['timeStart'];
    $dateEnd = $_POST['dateEnd'].' '.$_POST['timeEnd'];
}



if($title == ''){
    echo 'Введите задание';
    exit();
}

require $_SERVER['DOCUMENT_ROOT'] . '/database/PDO config DB.php';

$sql = "UPDATE tasks SET title=:title, description=:description, dateStart=:dateStart, dateEnd=:dateEnd WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(['title' => $title, 'description' => $description, 'dateStart' => $dateStart, 'dateEnd' => $dateEnd, 'id' => $id]);

header("Location: /resources/view/edit%20task.php?id=$id");