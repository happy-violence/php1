<?php

require_once __DIR__. '/function.php';
?>

<!doctype html>
<html>
<form action="/addNewFile.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimage">
    <button type="submit">Вперед!</button>
</form>
<?php foreach (getNamesImages() as $nameImage) { ?>
    <img width="20%" src="images/<?= $nameImage ?>">
<?php } ?>
</html>