<?php

require_once (__DIR__ . '/function.php');

if (empty(getCurrentUser())) {
    header("Location: http://localhost:8000/");
    exit;
}
//если массив не пустой
if (!empty($_FILES)) {
    //и если в массиве у ключа myimage есть значение, отличное от null
    if (isset($_FILES['myimage'])) {
        //и если тип загружаемого файла jpg, jpeg или png
        if ($_FILES['myimage']['type'] === 'image/jpg' || $_FILES['myimage']['type'] === 'image/png'
            || $_FILES['myimage']['type'] === 'image/jpeg') {
            //и если ошибки нет
            if (0 == $_FILES['myimage']['error']) {
                //и если файл $_FILES['myimage'] ['tmp_name'] является загруженным на сервер
                if (move_uploaded_file($_FILES['myimage']['tmp_name'],
                    __DIR__ . '/images/' . $_FILES['myimage']['name'])) {
                    $filename = __DIR__ . '/log';
                    $data = $_COOKIE['username'] . '|' . date("Y-m-d H:i:s") . '|' . $_FILES['myimage']['type'] . PHP_EOL;
                    // ведём лог (кто, когда, какое изображение загрузил)
                    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
                }
            }
        } else {
            echo 'Неверный формат!';
        }
    }
}
