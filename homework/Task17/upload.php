<?php

require __DIR__ . '/auth.php';
$login = getUserLogin();

    if ($login !== null && !empty($_FILES['attachment'])) {

    }
    if (!empty($_FILES['attachment'])) {
        $file = $_FILES['attachment'];

        $srcFileName = $file['name'];
        $newFilePath = __DIR__ . '/upload/' . $srcFileName;
        $image = getimagesize($newFilePath);
        $limitWidth = 1280;
        $limitHeight = 720;

        $allowedExtensions = ['jpg', 'png', 'gif'];
        $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
        if (!in_array($extension, $allowedExtensions)) {
            $error = 'Загрузка файлов с таким расширением запрещена!';
        } elseif ($file['error'] !== UPLOAD_ERR_OK) {
            $error = 'Ошибка при загрузке файла.';
        }
        else if ($image['1'] > $limitWidth || $image['0'] > $limitHeight) {
            $error = 'разрешение картинки слишком велико';
        }
        elseif (file_exists($newFilePath)) {
            $error = 'Файл с таким именем уже существует';
        } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
            $error = 'Ошибка при загрузке файла';
        } else {
            $result = 'http://localhost/php/homework/Task16/upload/' . $srcFileName;
        }

    }
?>

<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if ($login === null): ?>
    <a href="login.php">Авторизуйтесь</a>
<?php else: ?>
    Добро пожаловать, <?= $login ?> |
    <a href="logout.php">Выйти</a>
    <br>
    <?php if (!empty($error)): ?>
        <?= $error ?>
    <?php elseif (!empty($result)): ?>
        <?= $result ?>
    <?php endif; ?>
    <br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="attachment">
        <input type="submit">
    </form>
<?php endif; ?>
</body>
</html>