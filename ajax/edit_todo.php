
<?php
$id = trim(filter_var($_POST['id'], FILTER_SANITIZE_SPECIAL_CHARS));
$edit = trim(filter_var($_POST['edit'], FILTER_SANITIZE_SPECIAL_CHARS));
$task = trim(filter_var($_POST['task'], FILTER_SANITIZE_SPECIAL_CHARS));
$date = trim(filter_var($_POST['date'], FILTER_SANITIZE_SPECIAL_CHARS));
$who = trim(filter_var($_POST['who'], FILTER_SANITIZE_SPECIAL_CHARS));
$number = trim(filter_var($_POST['number'], FILTER_SANITIZE_SPECIAL_CHARS));
$note = trim(filter_var($_POST['note'], FILTER_SANITIZE_SPECIAL_CHARS));
$zone = trim(filter_var($_POST['zone'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = '';
if (strlen($task) < 3)
    $error = 'Маленькое задание';
else if (strlen($who) < 6)
    $error = 'Нет такого человека';

if ($error != '') {
    echo $error;
    exit();
}

include_once '../block/conect_db.php';

if ($edit == 1) {
    $query = $pdo->prepare("UPDATE `todo` SET `task`=?,`date`=?,`who`=?,`number`=?,`note`=?,`zone`=? WHERE `id` = ?");
    $query->execute(array($task, $date, $who, $number, $note, $zone, $id));
}
else {
    $query = $pdo->prepare("INSERT INTO `todo` SET `task`=?,`date`=?,`who`=?,`number`=?,`note`=?,`zone`=?");
    $query->execute(array($task, $date, $who, $number, $note, $zone));
}

echo '1';


