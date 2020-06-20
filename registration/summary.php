<?php
session_start();
$id_user = $_SESSION['id_user'];
    require('../connect.php');
    $job =  $_POST['job'];
    $surname = $_POST['surname'];
    $name_job_seeker = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $age = $_POST['age'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];
    if (($_POST['job']) and ($_POST['surname'])and($_POST['name'])and($_POST['patronymic'])and($_POST['age'])and($_POST['education'])and($_POST['skills'])) {
        $query = "INSERT INTO summary (id_user, job, surname, name_job_seeker, patronymic, age, education, skills) VALUES ('$id_user', '$job', '$surname', '$name_job_seeker', '$patronymic', '$age', '$education', '$skills')";
        $result = mysqli_query($connection, $query) or die("Ошибка " . mysqli_error($link));
        header("Location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Создание резюме</title>
</head>
<body>
    <div id="wrapper">
        <a href="/index.php" class="logo_login">Internit</a>
        <div class="wrapper">
            <div class="form">
                <h1 class="reg_log">Резюме</h1>
                <form method="POST">
                        <input type="text" name="job" placeholder="Интересующая вас должность" required>
                        <input type="text" name="surname" placeholder="Фамилия" required>
                        <input type="text" name="name" placeholder="Имя" required>
                        <input type="text" name="patronymic" placeholder="Отчество" required> 
                        <input type="number" name="age" placeholder="Возраст" required>
                        <select name="education">
                            <option disabled selected>Образование</option>
                            <option value="middle">Колледж</option>
                            <option value="high">Вуз</option>
                        </select>
                        <textarea name="skills" placeholder="Введите свои скилы здесь..."></textarea>
                        <button type="submit">Загрузить резюме</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>