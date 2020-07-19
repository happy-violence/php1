<?php

require_once __DIR__. '/classes.php';
$guestBook = new GuestBook(__DIR__ . '/guestbook.txt');
?>

<!doctype html>
<html>
<?php foreach($guestBook->getData() as $text) { ?><!-- для каждого элемента массива выводим каждую запись массива -->
<?= $text ?> <br>
<?php } ?>

<form action="/dataForGuestBook.php" method="post">
    <input type="text" name="text">
    <button type="submit">Добавить запись</button>
</form>
</html>