<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="css/style_todo.css?<?php echo time(); ?>" />
    <title>Контролька документов отдела</title>
</head>
<body>
<?=include_once 'block/conect_db.php';?>
    <main>
        <div class="main_table">
            <div class="table_up table">
                <div class="up_header">
                    <div class="header_span">важно</div>
                </div>
                <div class="table_left_up">
                    <ul>
                        <li>важно не срочно  3</li>
                        <?php 
                            $query = $pdo->query('SELECT * FROM `todo` WHERE `zone`= 3 ');
                                while($row = $query->fetch(PDO::FETCH_OBJ)){
                                    $html .=  "<li> $row->task  $row->date  $row->who  $row->number  $row->note </li>";
                                }
                                echo $html;
                        ?>
                    </ul>
                
                </div>
                <div class="table_right_up">
                    правый верхний
                </div>
            </div>

            <div class="table_down table">
                <div class="down_header">
                    <div class="header_span">не важно</div>
                </div>
                <div class="table_left_down">
                    левый низ
                </div>
                <div class="table_riht_down">
                    правый низ
                </div>
            </div>

                <div class="table-footer">
                    
                </div>
                <div class="footer_header">
                    <p>не срочно</p>
                    <p>срочно</p>
                </div>
                <div class="table_date">
                    <p>25.03.2022</p>
                </div>
        </div>
    </main>
</body>
</html>