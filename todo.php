<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\todo_my.css?<?php echo time(); ?>" />
    <title>Контролька отдела</title>
</head>
<?php
    $user = 'root';
    $password = '';
    $db = 'portal';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
?>
<body>
    <div class="main">
        <div div class="row">
            <div class="col_v"><p>важно</p></div>
            <div class="col id3">важно не срочно 3
                <table>
                    <tbody>
                <?php 
                    $query = $pdo->query('SELECT * FROM `todo` WHERE `zone`= 3 ');
                    while($row = $query->fetch(PDO::FETCH_OBJ)){
                        echo '<tr>';
                        echo '<td>' . $row->task . ' ' .  date('d.m.Y', ($row->date)) .' ' . $row->who . ' ' . $row->number .' '. $row->note .'</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                ?>

            </div>
            <div class="col id1" >важно срочно 1
            <table>
                    <tbody>
                    <?php 
                        $query = $pdo->query('SELECT * FROM `todo` WHERE `zone`= 1 ');
                        while($row = $query->fetch(PDO::FETCH_OBJ)){
                            echo '<tr>';
                            echo '<td>' . $row->task . ' ' . $row->date .' ' . $row->who . ' ' . $row->number .' '. $row->note .'</td>';
                            echo '</tr>';
                            }
                        echo '</tbody>';
                        echo '</table>';
                    ?>

            </div>
        </div>
        <div class="row">
            <div class="col_v"><p>не важно</p></div>
            <div class="col id4">не важно не срочно 4
            <table>
                    <tbody>
                <?php 
                    $query = $pdo->query('SELECT * FROM `todo` WHERE `zone`= 4 ');
                    while($row = $query->fetch(PDO::FETCH_OBJ)){
                        echo '<tr>';
                        echo '<td>' . $row->task . ' ' . $row->date .' ' . $row->who . ' ' . $row->number .' '. $row->note .'</td>';
                        echo '</tr>';
                        }
                    echo '</tbody>';
                    echo '</table>';
                ?>
            </div>
            <div class="col id2" >не важно срочно 2
            <table>
                    <tbody>
                <?php 
                    $query = $pdo->query('SELECT * FROM `todo` WHERE `zone`= 2 ');
                    while($row = $query->fetch(PDO::FETCH_OBJ)){
                        echo '<tr>';
                        echo '<td>' . $row->task . ' ' . $row->date .' ' . $row->who . ' ' . $row->number .' '. $row->note .'</td>';
                        echo '</tr>';
                        }
                    echo '</tbody>';
                    echo '</table>';
                ?>
            </div>
        </div>
        <div class="row_f">
            <div class="col">не срочно</div>
            <div class="col">срочно</div>
        </div>
    </div>
</body>

</html>