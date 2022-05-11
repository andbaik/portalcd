
<?php 
    session_start();
    if (!isset($user)){
    echo 'Вывод';
    echo '<form action="" method="post">' . '<br/>';
    echo '<input name="login">' . '<br/>';
	echo '<input name="password" type="password">';
	echo '<input type="submit">' . '<br/>';
    echo '</form>';    
}




$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'portal';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);


if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM user WHERE Name='$login' AND Password='$password'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
    
    if (!empty($user)) {
        echo "Пользователь $user[FullName] прошел авторизацию";
        $_SESSION['user'] = '1';
    } else {
        echo 'не верно введен логин и пароль';
    }
}
?>