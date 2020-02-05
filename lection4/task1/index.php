<?php

require_once __DIR__. '/function.php';
?>

<!doctype html>
<html>
<?php foreach (readGuestBook() as $record) { ?><!-- для каждого элемента массива выводим каждую запись массива -->
<?= $record ?> <br>
<?php } ?>
    <form action="/data.php" method="post">
        <input type="text" name="text">
        <button type="submit">Добавить запись</button>
    </form>
</html>