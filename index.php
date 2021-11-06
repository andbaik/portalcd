<?php
$title = 'Главная страница';
include_once 'block/header.php';?>

    <div class="main">
        <div class="wrapper">
            <div class="row">
                <a href="adress.php"> Адресная книга ЦД </a>
                <a href="link.php">Перечень ресурсов (ссылки)</a>
                <a href="documents.php">Нормативные документы</a>
            </div>
            <div class="row">
                <a href="todo.php">Контролька отдела</a>
                <a href="#">Контроль мероприятий</a>
                <a href="#">Талоны по безопасности</a>
            </div>
            <div class="row">
                <a href="#">АСУ Контроль (WEB)</a>
                <a href="#">Аттестация работников</a>
                <a href="#">Задать вопрос</a>
            </div>
        </div>
    </div>
<?php
    include 'block/footer.php';
?>
</body>
</html>
