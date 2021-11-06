<?php
$title = 'Контролька отдела';
include_once 'block/header.php';?>

    <div class="main_todo">
        <div class="row_todo">
            <div class="col_ver">
                <p>важно</p>
            </div>
            <div class="col">
                важно-несрочно 3
            </div>
            <div class="col">
                важно-срочно 1
            </div>
        </div>
        <div class="row_todo">
            <div class="col_ver">
                <p>не важно</p>
            </div>
            <div class="col">
                неважно-несрочно 4
            </div>
            <div class="col">
                неважно срочно 2
            </div>
        </div>
        <div class="row_footer">
            <div class="col_footer">
                <span>не срочно</span>
            </div>
            <div class="col_footer">
                <span>срочно</span>
            </div>
        </div>
    </div>
<?php
    include 'block/footer.php';
?>
</body>
</html>