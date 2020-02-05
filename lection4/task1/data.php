<?php

require_once __DIR__. '/function.php';

if (!empty($_POST['text'])) {
    $records = readGuestBook();
    $records[] = $_POST['text'] . "\n";
    file_put_contents(__DIR__ . '/guestbook.txt', $records,LOCK_EX);
}

header("Location: http://localhost:8000/");