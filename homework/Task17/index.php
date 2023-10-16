<html>
<head>
    <title>Фотоальбом</title>
</head>
<body>
<?php
$files = scandir(__DIR__ . '/upload');
$links = [];
foreach ($files as $fileName) {
    if ($fileName === '.' || $fileName === '..') {
        continue;
    }
    $links[] = 'http://localhost/php/homework/Task16/upload/' . $fileName;
}

foreach ($links as $link):?>
    <a  href="<?= $link ?>"><img  style="height: 640px; width: 500px" src="<?= $link ?>" ></a>
<?php endforeach; ?>
</body>
</html>
