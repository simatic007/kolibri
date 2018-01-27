<?php
    $login = "log_in"; //можете изменить ваш логин входа (допускаются цифры, латинские буквы и знаки кроме пробела!!)
    $password = "pass_word"; //можете изменить ваш пароль (допускаются цифры, латинские буквы и знаки кроме пробела!!)



    if(isset($_POST['btn'])){
        if($login == $_POST['login'] && $password == $_POST['pass']) {
            setcookie("login", $login, time()+3600*24*365);
            setcookie("pass", $password, time()+3600*24*365);
            header("Location: index.php");
        }
    }
    if(isset($_GET['exit'])) {
        setcookie ("login", "", time() - 3600);
        setcookie ("pass", "", time() - 3600);
    }
    if(isset($_COOKIE['login']) && isset($_COOKIE['pass']))
            header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/reset.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="main.css">
    <title>Вход в администраторскую панель</title>
</head>
<body>
    <form action="" method="post" class="login">
        <span>Авторизация:</span>
        <input type="text" name="login" placeholder="Ваш логин">
        <input type="password" name="pass" placeholder="Ваш пароль">
        <button name="btn">Войти</button>
    </form>
</body>
</html>