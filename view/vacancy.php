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
                <button type="submit"  onclick="location.href='#content';"></button>
            </form>
        </div> 
    </header>

    <?php 
            if((!isset($_GET['search']))) {
                if ($count<=6) {
                    echo '<div id="content" name="content">
                    <div class="wrapper_content">';   
                    for ($i=0; $i < $count; $i++) { 
                        article_vacancy($row, $i);
                    } 
                    echo '</div>
                    </div>';
                }   
                if ($count>6) {
                    $int_div_count = intdiv($count, 6);
                    echo '<div id="content" name="content"><div class="wrapper_content">';  
                    
                    $i=1;
                   
                    $m=1; 
                    while ($i<=$int_div_count) {
                         
                        $j = $i * 6;
                        $delta_j = $j-6;
                          
                        if ($_GET['page'.$i]) {
                            while ($delta_j < $j) {
                                article_vacancy($row, $delta_j);
                                $delta_j++;
                            }   
                            $m=2;     
                        } 
                        $i++;
                    } 
                    if ($m==1){
                        for ($a=0; $a < 6; $a++) { 
                            article_vacancy($row, $a);
                        }
                    }
                }
                $k=1;
                echo '<form method="GET" class="pages">';
                while($k<=$int_div_count){
                    echo '<input type="submit" class="page" name="page'.$k.'" value="'.$k.'" onclick="location.href=';
                    echo  "'#content';".'">';
                    $k++;
                }   
                echo '</form>';    
                echo '</div></div>';   
                }     
                if(isset($_GET['id'])) {
                    for ($i=0; $i < 6; $i++) { 
                        if ($_GET['id']==$row[$i]['id_vacancy'])
                        article_vacancy($row, $i);
                    }
    
                }            
    ?>
    <footer>
        <h1>@ by Mikhail Kondrashkin</h1>
    </footer>
</body>
</html>