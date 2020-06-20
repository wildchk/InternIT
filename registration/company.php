<?php 
session_start();
$id_user = $_SESSION['id_user'];
require('../connect.php');
$title = $_POST['title'];
$description = $_POST['description'];
if (($_POST['title']) and ($_POST['description'])) {
$query = "INSERT INTO company (id_user, title, description)  VALUES ('$id_user','$title','$description')";
$result = mysqli_query($connection, $query) or die("Ошибка " . mysqli_error($link));
header("Location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Регистрация компании</title>
</head>
<body>
    <div id="wrapper">
    <li class="logo"><a href="/index.php">InternIt</a></li>
        <div class="wrapper">
        <h1 class="reg_log">Компания</h1>
        <form method="POST">
            <input type="text" name="title" placeholder="Название компании" required>
            <input type="text" name="description" placeholder="Описание компании" required>
            <button type="submit">Зарегистрировать компанию</button>
        </form>
        </div>
    </div>
</body>
</html>