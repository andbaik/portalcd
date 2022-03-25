<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $user = 'root';
    $password = '';
    $db = 'portal';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);

    $query = $pdo->query('SELECT * FROM `todo` WHERE `zone`= 3 ');
        while($row = $query->fetch(PDO::FETCH_OBJ)){
            echo  $row->task .' ' . $row->who . ' ' . $row->number .' '. $row->note;
        echo '<br>';
    }

?>


</body>
</html>