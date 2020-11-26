<?php

require_once __DIR__ . '/function.php';

if (!empty($_POST['text'])) {
    $records = readGuestBook();
    $records[] = $_POST['text'];
    //file_put_contents пишет данные в файл,
    // filename - путь к записываемому файлу, data - записываемые данные
    file_put_contents(__DIR__ . '/guestbook.txt', implode("\n", $records),LOCK_EX);
    }

header("Location: http://localhost:8000/");
