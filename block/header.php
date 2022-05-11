<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.css" rel="stylesheet"> <!--load all styles -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php if (basename ($_SERVER['REQUEST_URI'])=='todo.php'){
        echo '<link rel="stylesheet" href="css/style_todo.css">';
    }?>
    
    
    <title><?=$title?></title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__row">
                    <div class="header__logo"><a href="index.php"><img src="/img/logo_p.png" alt="Logo"></a></div>
                    <div class="header__title">
                        <h1>Центральная дирекция управления движением</h1>
                        <h3>отдел безопасности движения поездов</h3>
                    </div>
                    <!--<div class="header__btn" id="enter">Вход</div>-->
                    <div class="header__enter"><a href="enter.php" alt="Вход"><i class="fa-solid fa-right-to-bracket"></i></a></div>
                </div>
            </div>
        </header>
                <?php if (basename ($_SERVER['REQUEST_URI'])!=='index.php'){
                
                echo '<div class="header__link container">';
                echo '<ul class="link__items">';
                echo '<li> <a href="#">Адресная&nbspкнига</a></li>';
                echo '<li> <a href="link.php">Перечень&nbspресурсов</a></li>';
                echo '<li> <a href="#"> Нормативные&nbspдокументы</a></li>';
                echo '<li> <a href="todo.php"> Контролька&nbspотдела</a></li>';
                echo '<li> <a href="#"> Контроль&nbspмероприятий</a></li>';
                echo '<li> <a href="#"> Талоны&nbspпо&nbspбезопасности</a></li>';
                echo '<li> <a href="#"> АСУ&nbspКонтроль</a></li>';
                echo '<li> <a href=""> Аттестация&nbspработников</a></li>';
                echo '<li> <a href="#">Задать&nbspвопрос</a></li>';
                echo '</ul>';
                echo '</div>';
                };?>