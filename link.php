<?php
$title = 'Полезные ссылки';
include 'block/header.php';

?>
<body>

<div class="main">
    <h2>Ссылки на ресурсы:</h2>
    <br>
<?php
    include_once 'block/conect_db.php';

    echo '<div class="table">';

        
    $query = $pdo->query('SELECT * FROM `links`');
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<tr>';
        echo '<td> <a href="' . $row->link .'">' . $row->shot_name .'</a> </td> <br>';
        echo '<td> <a href="' . $row->link .'">' . $row->nameLink .'</a> </td> <br>';
        echo '</tr>';
        }
    echo '</div>';
    
    include 'block/footer.php';
?>
</body>
</html>