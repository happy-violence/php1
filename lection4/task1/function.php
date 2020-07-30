<?php

//функция для чтения файла
function readGuestBook()
{
    //file — Читает содержимое файла и помещает его в массив
    return file(__DIR__ . '/guestbook.txt');
}