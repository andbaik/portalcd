<?php
$title = 'Полезные ссылки';
include_once 'block/header.php';?>
<body>

<div class="main">
    <h1>Ссылки на ресурсы!</h1>
<?php
    $user = 'root';
    $password = 'root';
    $db = 'portal';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);

    $query = $pdo->query('SELECT * FROM `links`');
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<a href="' . $row->link .'">' . $row->nameLink .'</a>' . '<br>';
    }

    include_once 'block/footer.php';
?>
</body>
</html>
