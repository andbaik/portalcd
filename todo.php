<?php

$title = "Контролька документов отдела";

include_once("block/header.php"); ?>

<body>

    <main class="container">
        <h1>Контролька документов</h1>
        <div class="table">
            <div class="table__row">
                <div class="row__title">
                    <div class="rotate">важно</div>
                </div>
                <div class="row__main">
                    <div class="do__left">
                        <div class="do__plus"> <a href="../edit_todo.php?edit=2&section=1"> <i class="fa-solid fa-plus"></a></i></div>
                        <div class="do__table">
                            <table class="table" id="todo">
                                <?php
                                include_once 'block/conect_db.php';
                                $query = $pdo->query('SELECT * FROM `todo` WHERE `zone` = 1');
                                while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $html .= "
                                            <tr>
                                                <td> {$row->task}  {$row->date}  {$row->who}  {$row->number}  {$row->note}</td> 
                                                <td>   <a href='../edit_todo.php?edit=1&id={$row->id}&section={$row->zone}' . ><i class='fa-solid fa-pencil'></i></..></td>
                                                <td><i class='fa-solid fa-check'></i></td>
                                                <td><i class='fa-solid fa-trash-can'></i></td>
                                            </tr>
                                            ";
                                };
                                echo $html;
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="do__right">
                        <div class="do__plus"><i class="fa-solid fa-plus"></i></div>
                        <div class="do__table">
                            <table class="table">
                                <?php
                                include_once 'block/conect_db.php';
                                $query = $pdo->query('SELECT * FROM `todo` WHERE `zone` = 2');
                                while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $html2 .= "
                                            <tr>
                                                <td> {$row->task}  {$row->date}  {$row->who}  {$row->number}  {$row->note}</td> 
                                                <td><i class='fa-solid fa-pencil'></i></td>
                                                <td><i class='fa-solid fa-rotate'></i></td>
                                                <td><i class='fa-solid fa-check'></i></td>
                                                <td><i class='fa-solid fa-trash-can'></i></td>
                                            </tr>
                                            ";
                                };
                                echo $html2;
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__row">
                <div class="row__title">
                    <div class="rotate">не&nbspважно</div>
                </div>
                <div class="row__main">
                    <div class="do__left">
                        <div class="do__plus"><i class="fa-solid fa-plus"></i></div>
                        <div class="do__table">
                            <table class="table">
                                <?php
                                include_once 'block/conect_db.php';
                                $query = $pdo->query('SELECT * FROM `todo` WHERE `zone` = 3');
                                while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $html3 .= "
                                            <tr>
                                                <td> {$row->task}  {$row->date}  {$row->who}  {$row->number}  {$row->note}</td> 
                                                <td><i class='fa-solid fa-pencil'></i></td>
                                                <td><i class='fa-solid fa-rotate'></i></td>
                                                <td><i class='fa-solid fa-check'></i></td>
                                                <td><i class='fa-solid fa-trash-can'></i></td>
                                            </tr>
                                            ";
                                };
                                echo $html3;
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="do__right">
                        <div class="do__plus"><i class="fa-solid fa-plus"></i></div>
                        <div class="do__table">
                            <table class="table">
                                <?php
                                include_once 'block/conect_db.php';
                                $query = $pdo->query('SELECT * FROM `todo` WHERE `zone` = 4');
                                while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $html4 .= "
                                            <tr>
                                                <td> {$row->task}  {$row->date}  {$row->who}  {$row->number}  {$row->note}</td> 
                                                <td><i class='fa-solid fa-pencil'></i></td>
                                                <td><i class='fa-solid fa-rotate'></i></td>
                                                <td><i class='fa-solid fa-check'></i></td>
                                                <td><i class='fa-solid fa-trash-can'></i></td>
                                            </tr>
                                            ";
                                };
                                echo $html4;
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="futer__title">
                <div class="title__left">не срочно</div>
                <div class="title__right">срочно</div>
            </div>
        </div>
        <p class="date"><?= date("Сегодня: d.m.Y") ?></p>
    </main>
    <?php include_once("block/footer.php"); ?>
</body>
</html>