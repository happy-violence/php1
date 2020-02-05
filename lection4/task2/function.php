<?php
function getNamesImages() //функция для получения имен картинок
{
    $wasteArray = ['.', '..']; //ненужный массив
    $allFiles = scandir(__DIR__ . '/images'); //массив имен файлов и каталогов, расположенных в папке images
    return array_diff($allFiles,$wasteArray); //разница между двумя массивами
}