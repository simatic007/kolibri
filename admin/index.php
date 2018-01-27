<?php
    if(!isset($_COOKIE['login']) && !isset($_COOKIE['pass'])) {
        header("Location: login.php");
        exit();
    }
    if(isset($_POST['save'])){
        $filename = "params/scripts.txt";
        $file = $_POST['scripts'];
        file_put_contents($filename, $file);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav>
        <ul class="main">
            <li><a href="index.php" class="active">Добавить скрипты на сайт</a></li>
            <li><a href="params.php">Параметры сайта</a></li>
            <li><a href="../" target="_blank">Посмотреть сайт</a></li>
            <li><a href="login.php?exit=1">Выход</a></li>
        </ul>
    </nav>
    <form class="main" method="post">
        <h1>Добавить скрипты на сайт</h1>
        <p>Вставьте необходимые скрипты от Яндекс Метрики, Google Analitics, Jivosite и др. в поле ниже</p>
        <textarea name="scripts"><?php include("params/scripts.txt"); ?></textarea>
        <button name="save">Сохранить</button>
    </form>
</body>
</html>