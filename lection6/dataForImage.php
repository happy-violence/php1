<?php

require_once __DIR__. '/classes.php';

$uploader = new Uploader('myimage');

if ($uploader->isUploaded()) {
    if (in_array($uploader->getFileType(), ['image/jpeg', 'image/jpg', 'image/png'])) {
        $uploader->upload();
        header("Location: http://Localhost:8000");
    } else {
        echo 'Неверный формат!';
    }
}