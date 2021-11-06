<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="my.css?<?php echo time(); ?>" />
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div div class="row">
            <div class="col_v"><p>важно</p></div>
            <div class="col">важно не срочно 3</div>
            <div class="col">важно срочно 1</div>
        </div>
        <div class="row">
            <div class="col_v"><p>не важно</p></div>
            <div class="col">не важно не срочно 4</div>
            <div class="col">не важно срочно 2</div>
        </div>
        <div class="row_f">
            <div class="col">не срочно</div>
            <div class="col">срочно</div>
        </div>
    </div>
</body>

</html>