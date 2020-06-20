<?php
$connection = mysqli_connect('localhost','root', '') or die("Ошибка " . mysqli_error($link));
$select_db = mysqli_select_db($connection, 'internships');
?>
