<?php
require_once __DIR__. '/function.php';
?>

<!doctype html>
<html>
<?php
//позволяем загружать изображения в галерею только авторизованным пользователям:
//если значение, возвращаемое фунцией, не null, то отображаем форму загрузки файлов
if (!empty(getCurrentUser())) { ?>
    <form action="/data.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myimage">
        <button type="submit">Вперед!</button>
    </form>
<?php } ?>
<!--для каждого значения массива, содержащего имена картинок
задаем путь-->
<?php foreach (getNamesImages() as $nameImage) { ?>
    <img width="20%" src="images/<?= $nameImage ?>">
<?php } ?>
</html>