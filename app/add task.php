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
$dateStart = $_POST['dateStart'] . ' ' . $_POST['timeStart'];
$dateEnd = $_POST['dateEnd'] . ' ' . $_POST['timeEnd'];
$user_id = $_COOKIE['id'];

require $_SERVER['DOCUMENT_ROOT'] . '/database/PDO config DB.php';

$sql = 'INSERT INTO tasks(title, description, dateStart, dateEnd, user_id) VALUES(:title, :description, :dateStart, :dateEnd, :user_id)';
$query = $pdo->prepare($sql);
$query->execute(['title' => $title, 'description' => $description, 'dateStart' => $dateStart, 'dateEnd' => $dateEnd, 'user_id' => $user_id]);

header('Location: /');
?>
