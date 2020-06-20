<?php 
session_start();
require('connect.php');
require('function.php');
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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script  type="text/javascript" src="js.js"></script>
    <title>InternIt</title>
</head>
<body>  
    <header>
       <?php if(!isset($_SESSION['id_user'])){
           index_unlogin();
       } else if($_SESSION['boss'] == 0) {
           index_loginseeker();
       } else index_loginreqruiter();
        ?>
         <div class="header"> 
            <h1>Стажировки в it</h1>
        </div> 
        <div id="search">
            <form method="GET">
                <input type="text" placeholder="Поиск..." name="search">
                <button type="submit" onclick="location.href='#content';"></button>
            </form>
        </div> 
    </header>
    <div class="index_wrapper">
    <?php 
            if(!isset($_GET['search'])) {
                echo '<div id="content" name="content">
                        <div class="wrapper_content">';   

                        for ($i=0; $i < 6; $i++) { 
                            article_vacancy($row, $i);
                        }

                echo '</div>
                    </div>';
            } 
            if(isset($_GET['search'])){
                        echo '<div id="content" name="content"><div class="wrapper_content">';   
                                for ($i=0; $i < $count; $i++) { 
                                    if ($_GET['search']==$row[$i]['title']){
                                        article_vacancy($row, $i);
                                        $j++;
                                    }                     
                                } 
                                if ($j==0) {
                                    echo '<div class="search_error" name="content">По вашему запросу ничего не найдено</div>';
                                }

                        echo '</div>
                        </div>'; 
            } 
    ?>
    </div>
    <footer>
        <h1>@ by Mikhail Kondrashkin</h1>
    </footer>
</body>
</html>