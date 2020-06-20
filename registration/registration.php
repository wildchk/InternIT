<?php 
require('../connect.php');
$user = $_POST['user'];
$password = $_POST['password'];
$boss = $_POST['boss'];
if (($_POST['user']) and ($_POST['password']) and ($_POST['boss'])) {
    $query = "INSERT INTO users (boss, user, password) VALUES ('$boss','$user','$password')";
    $result = mysqli_query($connection, $query) or die("Ошибка " . mysqli_error($link));
    header('Location: /login/login.php');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Регистрация</title>
</head>
<body>
    <div id="wrapper">
        <a href="/index.php" class="logo_login">InternIt</a>
        <div class="wrapper">
            <h1 class="reg_log">Регистрация</h1>
            <form method="POST">
                <input type="text" name="user" placeholder="Пользователь" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <div class="question">
                <p class="boss">Вы работодатель?</p>
                <p class="vibor">Да<input type="radio" class="yes" name="boss" value="1"></p>
                <p class="vibor">Нет<input type="radio" class="no" name="boss" value="0"></p>
                </div>
                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</body>
</html>