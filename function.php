<?php
function article_vacancy($row, $i) {
                    echo '<div class="vacancy">
                    <div class="wrapper_vacancy">
                    <a class="title" href="?id=';
                    echo $row[$i]['id_vacancy'];
                    echo '">';
                    echo $row[$i]['title'];
                    echo '</a><p class="salary">';
                    echo $row[$i]['salary'];
                    echo '</p><p class="company">';
                    echo $row[$i]['company'];
                    echo '<p class="description">';
                    if (strlen($row[$i]['description'])<=131) {
                        if (strlen($row[$i]['description'])<=100){
                            echo $row[$i]['description'];
                        } else echo $row[$i]['description'];
                    } else {
                        $word = $row[$i]['description'];
                        $countword = substr($word,0,132); 
                        echo $countword."...";
                    }
                    echo'</p></div></div>';  
}
function article_summary($row, $i) {
    echo '<div class="vacancy">
                    <div class="wrapper_vacancy">
                    <a class="title" href="?id=';
                    echo $row[$i]['id_summary'];
                    echo '">';
                    echo $row[$i]['job'];
                    echo '</a><p class="full_job_seeker_name">';
                    echo $row[$i]['surname'].' '.$row[$i]['name_job_seeker'].' '.$row[$i]['patronymic'];
                    echo '</p><p class="education">Образование: ';
                    if (($row[$i]['education'])== 'middle'){
                        echo 'колледж';
                    } else echo 'университет';
                    echo '</p><p class="skills">';
                    echo 'Навыки: '.$row[$i]['skills'];
                    echo '</p></div></div>';                
}
function article_company($row, $i) {
                        echo '<div class="vacancy">
                        <div class="wrapper_vacancy">
                        <a class="title" href="?id=';
                        echo $row[$i]['id_company'];
                        echo '">';
                        echo $row[$i]['title'];
                        echo '</a><p class="full_job_seeker_name">';
                        echo $row[$i]['description'];
                        echo '</p></div></div>';
                    }

                    
function index_unlogin() {
    echo '<nav>
    <ul>
        <li class="logo"><a href="/index.php">InternIt</a></li>
        <li><a href="/view/vacancy.php">Вакансии</a></li>
        <li><a href="/view/summary.php">Резюме</a></li>
        <li><a href="/view/company.php">Компании</a></li>
        <li class="login"><a href="/login/login.php">Войти</a></li>
        <li class="register"><a href="/registration/registration.php">Регистрация</a></li>
    </ul>
</nav>'; 
}

function index_loginseeker() {
    echo '<nav>
    <ul>
        <li class="logo"><a href="/index.php">InternIt</a></li>
        <li><a href="/view/vacancy.php">Вакансии</a></li>
        <li><a href="/view/summary.php">Резюме</a></li>
        <li><a href="/view/company.php">Компании</a></li>
        <li><a href="/view/my_summary.php">Мои резюме</a></li>
        <li><a href="/registration/summary.php">Создать резюме</a></li> 
        <li class="login"><a href="/login/logout.php">Выход</a></li>
    </ul>
</nav>'; 
}
function index_loginreqruiter(){
    echo '<nav>
    <ul>
        <li class="logo"><a href="/index.php">InternIt</a></li>
        <li><a href="/view/vacancy.php">Вакансии</a></li>
        <li><a href="/view/summary.php">Резюме</a></li>
        <li><a href="/view/company.php">Компании</a></li>
        <li><a href="/registration/vacancy.php">Создать вакансию</a></li>
        <li><a href="/registration/company.php">Зарегистрировать компанию</a></li>
        <li class="login"><a href="/login/logout.php">Выход</a></li>
    </ul>
</nav>'; 
}
?>