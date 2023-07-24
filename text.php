<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>korolev ae-22-03</title>
</head>

<body>


<div class="container">
    <div class="sloy1">
        <div class="header1">
            <a class="ag" href="korolev_22_03.html">Туристическое агенство </a>
            <div class="header2">
                <nav class="nav">
                    <a class="navlink" href='glavnaya.html'> Главная </a>
                    <a class="navlink" href='bilet.html'> Билеты </a>
                    <a class="navlink" href='index.php'> Контакты </a>
                    <a class="onas" href='http://127.0.0.1/openserver/phpmyadmin/index.php'> PhpMyAdmib - проверка </a>               
                </nav>
            </div>
        </div>
    </div>
</div>


<?php
/* Принимаем данные из формы */
$otzyv = $_POST["otzyv"];
//var_dump($otzyv);

/* Подключаемся к БД */
$db=mysqli_connect("korolev", "root","", "praktika");

/*proverka*/
if ($db==false)
{
    //echo 'Ошибка подключения';
}else{
    //echo 'подключились';
}

/* Записываем данные из формы в БД */
$sql = "INSERT INTO mytable (otzyv) VALUES ('$otzyv')";
$result=mysqli_query($db,$sql);
if ($result==false){
    //echo 'ошибка';
}else{
    //echo'записали';
}
mysqli_close($db);
?>


</body>
</html>