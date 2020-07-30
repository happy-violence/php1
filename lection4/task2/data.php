<?php
if (!empty($_FILES)) {
    if (isset($_FILES['myimage'])) {
        if ($_FILES['myimage']['type'] === 'image/jpeg' || $_FILES['myimage']['type'] === 'image/png' ||
            $_FILES['myimage']['type'] === 'image/jpg') {
            if (0 == $_FILES['myimage'] ['error']) {
                //Перемещает загруженный файл в новое место
                move_uploaded_file(
                    $_FILES['myimage'] ['tmp_name'],
                    __DIR__ . '/images/' . $_FILES['myimage'] ['name']
                );
            }
        } else {
            echo 'Неверный формат!';
        }
    }
}