<?php
$title = 'Полезные ссылки';
include_once 'block/header.php';?>
<body>

<div class="main">
    <h1>Ссылки на ресурсы!</h1>
<?php
   include_once 'block/conect_db.php';

    $query = $pdo->query('SELECT * FROM `links`');
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<a href="' . $row->link .'">' . $row->nameLink .'</a>' . '<br>';
    }

    include_once 'block/footer.php';
?>
</body>
</html>
