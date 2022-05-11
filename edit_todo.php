<?php
$edit = $_GET['edit']; 
$id = $_GET['id'];
$section = $_GET['section'];

//print_r ('Cection =' . $section);
//if ($edit == 1)
//    echo "Будем редактировать строку с номером $id";

//else
 //   echo "Редактировать не будем";
?>

<?php
$title = $edit == 1 ? 'Редактирование записи' : 'Добавление записи';

include 'block/header.php';
?>

<body>
    <?php 
    include_once 'block/conect_db.php';
    $query = $pdo->prepare('SELECT * FROM `todo` WHERE `id` = ?');
    $query->execute(array($id));
    $row = $query->fetch(PDO::FETCH_OBJ);
    ?>
    <div class="container">
        <h1><?=$title?></h1>

        <form>
        <label for="task">Задание</label>
            <input type="text" name="task" id="task" value="<?=$row->task?>">

            <label for="date">Дата</label>
            <input type="date" name="date" id="date" value="<?=$row->date?>">

            <label for="who">Исполнитель</label>
            <input type="text" name="who" id="who" value="<?=$row->who?>">

            <label for="number">Номер документа</label>
            <input type="text" name="number" id="number" value="<?=$row->number?>">

            <label for="note">Где сейчас</label>
            <input type="note" name="note" id="note" value="<?=$row->note?>">


            <div class="select">
                <div class="select__left">
                    <label>Секция 1<input type="radio" name="zone" id="zone" value="1" <?php echo $section == 1 ? 'checked' : ''?>></label> 
                    <label>Секция 2<input type="radio" name="zone" id="zone" value="2" <?php echo $section == 2 ? 'checked' : ''?>></label> 
                </div>
                <div class="select__right">
                    <label>Секция 3<input type="radio" name="zone" id="zone" value="3" <?php echo $section == 3 ? 'checked' : ''?>></label> 
                    <label>Секция 4<input type="radio" name="zone" id="zone" value="4" <?php echo $section == 4 ? 'checked' : ''?>></label>              
                </div>
            </div>


<div class="info">
            <div class="error-mess" id="error-block"></div>
            <button type="button" id="edit_todo"><?php echo $edit==1 ? "Исправить" : "Добавить"?></button>
</div>

        </form>

        
    </div>
    <?php include_once ("block/footer.php"); ?>

    <script>
    //Ищем какой ID записи
    let searchParams = new URLSearchParams(window.location.search);
    searchParams.has('id');
    let id = searchParams.get('id');
    let edit = searchParams.get('edit');
    

        $('#edit_todo').click(function() {
            let task = $('#task').val();
            let date = $('#date').val();
            let who = $('#who').val();
            let number = $('#number').val();
            let note = $('#note').val();
            let zone = $('#zone:checked').val(); //берем значение активной радиокнопки
            console.log (zone, id, who);

            $.ajax({
                url: 'ajax/edit_todo.php',
                type: 'POST',
                cache: false,
                data: {
                    'id': id,
                    'edit': edit,
                    'task': task,
                    'date': date,
                    'who': who,
                    'number': number,
                    'note': note,
                    'zone': zone
                },
                dataType: 'html',
                success: function(data) {
                    console.log(data);
                    if (data == 1) {
                        $("#edit_todo").text("Все готово");
                        $("#error-block").hide();
                        window.location.replace("todo.php");
                        /*header('Location:http://portalcd.loc/todo.php');
                        document.location.reload(true);
                        exit;*/
                    } else {
                        $("#error-block").show();
                        $("#error-block").text(data);
                    }
                }
            });
        });
    </script>
</body>

</html>