<?php 
session_start();
require('../connect.php');
require('../function.php');
$query = "SELECT * FROM vacancy";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));	
		$count = mysqli_num_rows($result);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
        <?php 
        for ($i=0; $i < $count; $i++) { 
            article_vacancy($row, $i);
        }
        ?>
</body>
</html>