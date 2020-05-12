<?php
require_once (__DIR__ . '/function.php');

// ЕСЛИ пользователь уже вошел (см. пункт 2), ТО редирект на главную страницу
//
if (!empty(getCurrentUser())) {
    header("Location: http://localhost:8000/");
}
//ЕСЛИ пользователь не вошел - отображает форму входа
else {?>
    <!doctype html>
    <form action="/login.php" method="post">
        <input type="text" name="login">
        <input type="password" name="pwd">
        <button type="submit">Вход</button>
    </form>
<?php }
// ЕСЛИ введены данные в форму входа - проверяем их (см. пункт 1.3) и ЕСЛИ проверка прошла,
// ТО запоминаем информацию о вошедшем пользователе
if (!empty($_POST['login']) && !empty($_POST['pwd']) && checkPassword($_POST['login'], $_POST['pwd'])) {
    setcookie('username', $_POST['login'], '0', '/');
    header("Location: http://localhost:8000/");
}