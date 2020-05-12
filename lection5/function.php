<?php

//возвращает массив всех пользователей и хэшей их паролей
function getUsersList()
{
    return [
        'Ivan' => '$2y$10$XaFz8cuFzRUQQKLUDmJtXu6loqwzLZDdHos/w8IOt0H/uJixGRPZK',//12345
        'Maria' => '$2y$10$u4fQNfdecm8rvZbjmcqXsOTwoY.NWFuBKKP7UagsnpC6/xaKNrj8u'//54321
    ];
}

//проверяет - существует ли пользователь с заданным логином
function existsUser($login)
{
    //присваиваем результат функции getUsersList переменной
    $users = getUsersList();
    //возвращает true в случае, если в массиве $users есть заданный логин
    return isset($users[$login]);
}

//проверяет, существует ли пользователь с заданным логином и паролем
function checkPassword($login, $password)
{
    $users = getUsersList();
    //возвращает true в случае, когда существует пользователь с заданным логином
    //и пароль соответствует хэшу
    return existsUser($login) && password_verify($password,$users[$login]);
}

//возвращает либо имя вошедшего на сайт пользователя, либо null
function getCurrentUser()
{
    //если значение куки с ключом 'username' не нулевое
    //то функция вернет это значение
    if (isset($_COOKIE['username'])) {
        return $_COOKIE['username'];
    }

    return null;
}

//функция для получения имен картинок
function getNamesImages()
{
    //ненужный массив
    $wasteArray = ['.', '..'];
    //массив имен файлов и каталогов, расположенных в папке images
    $allFiles = scandir(__DIR__ . '/images');
    //разница между двумя массивами
    return array_diff($allFiles,$wasteArray);
}