<?php

require_once __DIR__ . '/classes/GuestBook.php';

$guestBook = new GuestBook(__DIR__ . '/guestbook.txt');

if (!empty($_POST['text'])) {
    //необходимо получить массив уже имеющихся записей гостевой,
    // добавить к этому массиву новый элемент (текст из формы) и
    // записать полученный массив в тот же файл, разделяя элементы символом переноса строки
    $guestBook->getData();
    $guestBook->append($_POST['text'])->save();

    header("Location: http://localhost:8000/guestBook.php");
} else {
    echo 'запись не введена';
}