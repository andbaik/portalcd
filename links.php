<?php
$title = 'Полезные ссылки';
include 'block/header.php';?>
<body>

<div class="main">
    <h2>Ссылки на ресурсы:</h2>
    <br>
<?php
   include_once 'block/conect_db.php';

    echo <<<END
    <table class="table  table-responsive table-hover">
        <thead class="table-secondary">
            <tr>
                <th>Короткое название </th>
                <th>Полное название автоматизированной системы </th>
            </tr>
        </thead>
        <tbody>
    END; 
    $query = $pdo->query('SELECT * FROM `links`');
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<tr>';
        echo '<td> <a href="' . $row->link .'">' . $row->shot_name .'</a> </td>';
        echo '<td> <a href="' . $row->link .'">' . $row->nameLink .'</a> </td>';
        echo '</tr>';
        }
    echo '</tbody>';
    echo '</table>';
  
    include_once 'block/footer.php';
?>
</body>
</html>
