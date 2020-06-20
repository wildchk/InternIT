<?php
    session_start();
    $id_user = $_SESSION['id_user'];
    require('../connect.php');
    $title = $_POST['title'];
    $salary = $_POST['salary'];
    $company = $_POST['company'];
    $description = $_POST['description'];
    $query = "INSERT INTO vacancy (id_user, title, salary, company, description) VALUES ('$id_user','$title','$salary','$company','$description')";
    mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Создание резюме</title>
</head>
<body>
    <div id="wrapper">
    <a href="/index.php" class="logo_login">Internit</a>
        <div class="wrapper">
        <h1 class="reg_log">Вакансия</h1>
            <form method="POST">
                <input type="text" name="title" placeholder="Заголовок" required>
                <input type="number" name="salary" placeholder="Зарплата" required>
                <input type="text" name="company" placeholder="Компания" required> 
                <input type="text" name="description" placeholder="Описание" required>
                <button type="submit">Загрузить вакансию</button>
            </form>
        </div>
    </div>
</body>
</html>