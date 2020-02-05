<?php

function readGuestBook() //функция для чтения файла
{
    return file(__DIR__ . '/guestbook.txt');
}