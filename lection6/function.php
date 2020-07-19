<?php

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

//функция для чтения файла
function readGuestBook()
{
    //file — Читает содержимое файла и помещает его в массив
    return file(__DIR__ . '/guestbook.txt');
}