<?php
require "enter.php";
$log=new login(htmlspecialchars($_POST["email"]),htmlspecialchars($_POST["login"]),htmlspecialchars(MD5($_POST["password"])),htmlspecialchars($_POST["reg"]),htmlspecialchars($_POST["auto"]));
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрируйся тварь</title>
</head>
<body>
<h2>Регистрация</h2>
<form name="form" action="" method="post">
    <label>Ваш email</label><br>
    <input type="text" name="email"/><br>
    <label>Ваш login</label><br>
    <input type="text" name="login"/><br>
    <label>Ваш пароль</label><br>
    <input type="text" name="password"/><br>
    <input type="submit" name="reg" value="Зарегестрироваться" />
    <input type="submit" name="auto" value="Войти" />
</form>
</body>
</html>
