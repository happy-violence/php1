<?php
$images = [1 => 'sun.jpg', 2 => 'walley.jpg', 3 => 'winter.jpg'];
?>

<html>
<head>
    <title>Фотогалерея/</title>
</head>
<body>
    <form>
        <a href="/image.php?id=1">
            <img width="30%" src="/sun.jpg">
        </a>
        <a href="/image.php?id=2">
            <img width="30%" src="/walley.jpg">
        </a>
        <a href="/image.php?id=3">
            <img width="30%" src="/winter.jpg">
        </a>
    </form>
</body>
</html>