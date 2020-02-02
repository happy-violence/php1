<?php
$images = [1 => 'sun.jpg', 2 => 'valley.jpg', 3 => 'winter.jpg'];

?>

<html>
<head>
    <title>Фотогалерея/</title>
</head>
<body>
    <form>
        <?php
        foreach ($images as $id => $image) { ?>
            <a href="/image.php?id=<?= $id ?>">
                <img width="30%" src="<?= $image ?>">
            </a>
        <?php } ?>
    </form>
</body>
</html>