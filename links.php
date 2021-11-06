<?php
$title = 'Полезные ссылки';
include 'block/header.php';
?>
<body>

<div class="main-table">
    <h2>Ссылки на ресурсы:</h2>
    <br>
<?php
    include_once 'block/conect_db.php';
    echo '<table class="table  table-responsive table-hover">';

        echo '<tbody>';
        
    $query = $pdo->query('SELECT * FROM `links`');
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<tr>';
        echo '<td> <a href="' . $row->link .'">' . $row->shot_name .'</a> </td>';
        echo '<td> <a href="' . $row->link .'">' . $row->nameLink .'</a> </td>';
        echo '</tr>';
        }
    echo '</tbody>';
    echo '</table>';
    include 'block/footer.php';
?>
</body>
</html>