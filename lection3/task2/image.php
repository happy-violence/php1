<?php

$images = [1 => 'sun.jpg', 2 => 'valley.jpg', 3 => 'winter.jpg'];

$id = $_GET['id'];
?>

<html>
    <body>
        <form>
            <?php if (isset($_GET['id']) && isset($images[$id])) { ?>
                <img width="30%" src="<?=$images[$id]?>">
            <?php } else {
                echo 'такой картинки нет!';
            }?>
        </form>
    </body>
</html>
